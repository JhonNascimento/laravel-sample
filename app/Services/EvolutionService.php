<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class EvolutionService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = env('evol_globalApikey'); // Pegamos a API Key do .env
        //$this->baseUrl = env('evol_baseUrl') . '/message';
    }

    // Método para buscar dados da API
    public function getData()
    {
        $response = Http::withHeaders([
            'apikey' => $this->apiKey,
        ])->get("{$this->baseUrl}/dados");

        return $response->json();
    }

    // Método para enviar dados via POST
    public function postData($data)
    {
        //dd($this->baseUrl);
        $response = Http::withHeaders([
            'apikey' => $this->apiKey,
            //'Content-Type' => 'application/json', // Garantindo JSON no envio
        ])->post($this->baseUrl, $data);

        return $response->json();
    }

    public function sendText($data){
        $this->baseUrl = env('evol_baseUrl') . '/message/sendText/'. env('evol_instance');
        return $this->postData($data);
    }
}
