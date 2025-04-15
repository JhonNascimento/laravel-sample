<?php

namespace App\Http\Controllers;

use App\Models\TesteNoprivado;
use App\Services\CoreService;
use App\Services\EvolutionService;
use App\Services\MercadoPagoService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    protected $evolutionService, $coreService, $mercadoPagoService;
    
    public function __construct(EvolutionService $evolutionService, CoreService $coreService, MercadoPagoService $mercadoPagoService)
    {
        $this->evolutionService = $evolutionService;
        $this->coreService = $coreService;
        $this->mercadoPagoService = $mercadoPagoService;
    }
    
    public function consultarUsuario(Request $request, $remoteJid, $servico="TV"){
    
        $telefone = preg_replace('/\D/', '', $remoteJid);

        Log::info("consultarUsuario: $telefone, $servico");

        if($servico == "TV"){
            $get_client = $this->coreService->get_client(['username' => $telefone]);
        }else{
            $get_client = $this->coreService->get_noprivado(['username' => $telefone]);
        }

        //dd($get_client);

        if($get_client['result']){
            $vencimento = Carbon::createFromTimestamp($get_client['data']['exp_date']);
            if ($vencimento->isPast()) {
                $get_client['data']['vencido'] = true;
            } else {
                $get_client['data']['vencido'] = false;
            }
            $get_client['data']['vencimento'] = $vencimento->format('d/m/Y H:i');
        }
        
        return response()->json($get_client);
    }

    public function criarTeste(Request $request, $remoteJid, $bouquet){
        
        $telefone = preg_replace('/\D/', '', $remoteJid);

        Log::info("criarTeste: $telefone, $bouquet");

        if($bouquet == 0){
            $idbouquet = ["1","2","3"]; // sem adultos
        }else{
            $idbouquet = ["1","2","3","4"]; // com adultos
        }

        $password = $this->gerarSenha();

        $data = [
            'username' => $telefone,
            'password' => $password,
            'idbouquet' => $idbouquet,
            'notes' => "Criação de teste automática",
        ];

        $trial_create = $this->coreService->trial_create($data);
        
        if($trial_create['result']){
            
            $username = $trial_create['data']['username'];
            $password = $trial_create['data']['password'];
            $expDate = $trial_create['data']['exp_date'];
            $vencimento = Carbon::createFromTimestamp($expDate)->format('d/m/Y H:i');
            $status = $trial_create['data']['mens'];

            $mensagem  = "🎉 *{$status}*\n\n";
            $mensagem .= "🔐 *Usuário:* {$username}\n";
            $mensagem .= "🔑 *Senha:* {$password}\n";
            $mensagem .= "📆 *Vencimento:* {$vencimento}\n\n";
            $mensagem .= "Aproveite e bom uso! 🚀";
        }else{
            $mensagem  = "⚠️ *Não foi possível criar o teste!*\n\n";
            $mensagem .= "Este usuário já existe ou já foi beneficiado com um teste anteriormente.\n";
            $mensagem .= "Caso tenha dúvidas ou precise de ajuda, entre em contato com o suporte. 💬";
        }
        
        return response()->json(['mensagem' => $mensagem]);
    }

    public function criarTesteNoprivado(Request $request, $remoteJid){
        
        $telefone = preg_replace('/\D/', '', $remoteJid);

        //dd($telefone);

        Log::info("criarTesteNoprivado: $telefone");

        $existeAtivo = TesteNoprivado::where('status', 'active')
            ->where('end_time', '>', Carbon::now())
            ->exists();

        if(!$existeAtivo){

            $username = "JK4533";
            $password = "JK4533";
            
            $data = ['username' => $username, 'status' => true];
            $trial_create = $this->coreService->block_noprivado($data);    

            //dd($trial_create);

            if($trial_create['result']){
                
                $testeNoprivado = TesteNoprivado::create([
                    'username' => $telefone,
                    'start_time' => Carbon::now(),
                    'end_time' => Carbon::now()->addMinutes(5),
                    'status' => 'active'
                ]);

                if($testeNoprivado){
                    $mensagem  = "⚠️ *Teste Criado com sucesso.*\n\n";
                    $mensagem .= "🔐 *Usuário:* {$username}\n";
                    $mensagem .= "🔑 *Senha:* {$password}\n";
                    $mensagem .= "Aproveite e bom uso! 🚀"; 
                }else{
                    $mensagem  = "⚠️ *Nao foi possivel criar o teste.*\n\n";
                }   
            }else{
                $mensagem  = "⚠️ *cliente já se encontra nesse status ativo.*\n\n";
            }
        }else{
            $mensagem  = "⚠️ *Estamos com um teste em andamento, aguarde alguns minutos e tente novamente.*\n\n";
        }
        
        return response()->json(['mensagem' => $mensagem]);
    }

    public function webhookPagamento(Request $request){
    
        Log::info("webhookPagamento: ", $request->all());
        
        $paymentId = $request->input('data.id');

        $pagamento = $this->mercadoPagoService->validarPagamento($paymentId);

        if (isset($pagamento['error'])) {
            return response()->json(['error' => 'Erro ao validar o pagamento.'], 400);
        }

        //dd($pagamento);

        // Formatação de valores
        $valor = number_format($pagamento["transaction_amount"], 2, ",", ".");
        $descricao = $pagamento["description"];
        
        // referencia
        $referencia = $pagamento["external_reference"];
        // Quebrando a string em partes
        $partes = explode('-', $referencia);

        // Atribuindo os valores a variáveis
        $telefone = $partes[0];  // "559299780134"
        $data = $partes[1];      // "20250403"
        $servico = $partes[2];   // "TV ou NP"
        
        // Status do pagamento
        $status = $pagamento["status"];
        $status_detalhado = $pagamento["status_detail"];

        //$status = "approved"; // somente testes

        // Mensagem com base no status
        if ($status === "approved") {
            $data_aprovacao = date("d/m/Y H:i", strtotime($pagamento["date_approved"] ?? "now"));
            $mensagem = "✅ **Pagamento Aprovado!**\n";
            $mensagem .= "Seu pagamento de **R$ {$valor}** foi recebido com sucesso.\n\n";
            $mensagem .= "📅 **Data da aprovação:** {$data_aprovacao}\n";
            $mensagem .= "📌 **Descrição:** {$descricao}\n";
            $mensagem .= "Estamos liberando seu serviço. Obrigado por escolher a JK IPTV! 🚀\n";
            
            $this->enviarMsg($telefone, $mensagem);

            // libera servico 1 mes do cliente
            $renew_client = $this->coreService->renew_client(['username' => $telefone, 'month' => 1]);

            if($renew_client['result']){

                // Pegando os dados retornados pela API
                $username = $renew_client['data']['username'];
                $mes = $renew_client['data']['month'];
                $expDate = Carbon::createFromTimestamp($renew_client['data']['exp_date']); // Convertendo timestamp para data legível
                $vencimento = $expDate->format('d/m/Y H:i');
                $status = $renew_client['data']['mens']; // Mensagem de sucesso
                
                // Criando a mensagem formatada
                $mensagem  = "Olá *{$username}*, sua mensalidade foi renovada com sucesso! 🎉\n\n";
                $mensagem .= "📅 *Mês renovado:* {$mes}\n";
                $mensagem .= "📆 *Novo vencimento:* {$vencimento}\n";
                $mensagem .= "✅ *Status:* {$status}\n\n";
                $mensagem .= "Obrigado por continuar conosco! 🚀";

                $this->enviarMsg($telefone, $mensagem);
            }else{
                $mensagem .= "Houve um erro na renovação! Erro: " . $renew_client['mens'];
                $this->enviarMsg($telefone, $mensagem);
            }
        }
        
        if ($status === "rejected") {

            $mensagem = "❌ **Pagamento Recusado!**\n";
            $mensagem .= "Infelizmente, seu pagamento não foi aprovado.\n\n";
            $mensagem .= "🚨 **Motivo:** {$status_detalhado}\n";
            $mensagem .= "📌 Tente novamente com outro método de pagamento.\n";

            $this->enviarMsg($telefone, $mensagem);
        }
        
        return response()->json(['mensagem' => 'webhook processado']);
    }
    
    public function criarPagamento(Request $request, $remoteJid, $servico = "TV"){

        $telefone = preg_replace('/\D/', '', $remoteJid);

        Log::info("criarPagamento: $telefone, $servico");
        
        $referencia = $telefone .'-'. date('Ymd') . '-'. $servico;

        $mercadoPagoService = $this->mercadoPagoService->gerarPagamento($referencia);

        if(isset($mercadoPagoService['error'])){
            return response()->json(['error' => 'Erro ao gerar o pagamento.'], 400);
        }

        //dd($mercadoPagoService);

        $id = $mercadoPagoService['id'];
        $qr_code = $mercadoPagoService['point_of_interaction']['transaction_data']['qr_code'];
        //$qr_code_base64 = $mercadoPagoService['point_of_interaction']['transaction_data']['qr_code_base64'];
        $status = $mercadoPagoService['status']; // pending, approved, rejected, etc.
        $status_detail = $mercadoPagoService['status_detail']; // pending_waiting_transfer
        $ticket_url = $mercadoPagoService['point_of_interaction']['transaction_data']['ticket_url'];
        $valor = $mercadoPagoService['transaction_amount'];

        $mensagem = "📝 **Pagamento Gerado!**\n";
        $mensagem .= "Seu pagamento de **R$ {$valor}** foi criado com sucesso.\n\n";
        $mensagem .= "🔢 **ID do Pagamento:** {$id}\n";
        $mensagem .= "📌 **Referência:** {$referencia}\n\n";
        $mensagem .= "📌 **Status Inicial:** {$status} ({$status_detail})\n\n";

        $mensagem .= "📥 Copie e cole o código PIX no seu app bancário:\n";
        $mensagem .= "```\n{$qr_code}\n```\n";

        $mensagem .= "📄 **Boleto ou link para pagamento:**\n";
        $mensagem .= "[Clique aqui para pagar]({$ticket_url})\n";

        $mensagem .= "\n⏳ Aguarde a confirmação do pagamento. O status será atualizado automaticamente.\n";
        $mensagem .= "\n⏳ Ou digite validar pagamento, para validarmos o seu pagamento.\n";
        $mensagem .= "Se precisar de ajuda, entre em contato com nosso suporte. 🚀";

        return response()->json(['mensagem' => $mensagem]);
    }

    public function enviarMsg($phoneNumber, $text){

        $body = ["number" => $phoneNumber, "text"=> $text];

        $this->evolutionService->sendText($body);
    }

    public function gerarSenha()
    {
        // Gera duas letras maiúsculas aleatórias
        $letras = strtoupper(substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 2));

        // Gera quatro números aleatórios
        $numeros = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        return $letras . $numeros;
    }
  
}
