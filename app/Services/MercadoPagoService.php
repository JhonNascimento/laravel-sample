<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MercadoPagoService
{
    protected $authorization;
    protected $baseUrl;

    public function __construct()
    {
        $this->authorization = 'Bearer ' . env('mp_authorization'); // Pegamos a API Key do .env
        $this->baseUrl = env('mp_url');
    }

    // Método para buscar dados da API
    public function getData($url = null, $dados)
    {
        $url = $url ?? $this->baseUrl;
        $response = Http::withHeaders([
            'Authorization' => $this->authorization
        ])->get($url, $dados);

        return $response->json();
    }

    // Método para enviar dados via POST
    public function postData($data)
    {
        //dd($data);
        $response = Http::withHeaders([
            'Authorization' => $this->authorization,
            'X-Idempotency-Key' => uniqid('', true),
        ])->post($this->baseUrl, $data);
            
        return $response->json();
    }

    public function gerarPagamento($referencia){
        $data = [
            'transaction_amount' => floatval(env('mp_transaction_amount')),
            'payment_method_id' => env('mp_payment_method_id'),
            'notification_url' => env('mp_notification_url'),
            'description' => env('mp_description'),
            'external_reference' => $referencia,
            'payer' => ['email' => env('mp_payer_email')],
        ];
        dd($data);
        return $this->postData($data);
    }

    public function validarPagamento($id){
        return $this->getData($this->baseUrl . '/' . $id, []);
    }
}
