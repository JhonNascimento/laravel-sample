<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class RotinaVencer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rotina:vencer';

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
        // Chama a rota para vencer em 5 dias
        $response5 = Http::get(env('APP_URL') . '/api/rotina-vencer/3');
        if ($response5->successful()) {
            $this->info(now() . ' - Rota vencer 5 dias chamada com sucesso!' . $response5->body());
        } else {
            $this->error(now() . ' - Falha ao chamar a rota vencer 5 dias. Código: ' . $response5->status());
        }

        // Chama a rota para vencer no dia de hoje
        $response0 = Http::get(env('APP_URL') . '/api/rotina-vencer/0');
        if ($response0->successful()) {
            $this->info(now() . ' - Rota vencer hoje chamada com sucesso!' . $response0->body());
        } else {
            $this->error(now() . ' - Falha ao chamar a rota vencer hoje. Código: ' . $response0->status());
        }
    }
}
