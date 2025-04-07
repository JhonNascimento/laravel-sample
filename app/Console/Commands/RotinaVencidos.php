<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RotinaVencidos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rotina:vencidos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para executar uma rotina de exemplo';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Chama a rota para vencimento ha 5 dias
        $response5 = Http::get(env('APP_URL') . '/api/rotina-vencidos/5');
        if ($response5->successful()) {
            $this->info(now() . ' - Rota vencidos a 5 dias chamada com sucesso!' . $response5->body());
            Log::info('Rota vencidos a 5 dias chamada com sucesso!' . $response5->body());
        } else {
            $this->error(now() . ' - Falha ao chamar a rota vencidos a 5 dias. Código: ' . $response5->status());
            Log::error('Falha ao chamar a rota vencidos a 5 dias. Código: ' . $response5->status());
        }
    }
}
