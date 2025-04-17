<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CoreService
{
    protected $core_apiKey;
    protected $core_secret;
    protected $core_base_url;
    protected $core_servico;

    public function __construct()
    {
        $this->core_apiKey=env('core_apiKey');
        $this->core_secret=env('core_secret');
        $this->core_base_url = env('core_base_url');
        $this->core_servico = '';
    }

    // Método para buscar dados da API
    public function getData()
    {
        $response = Http::withHeaders([
            //'apikey' => $this->apiKey,
        ])->get("{$this->core_base_url}/{$this->core_servico}/{$this->core_apiKey}");

        return $response->json();
    }

    // Método para enviar dados via POST
    public function postData($data)
    {
        $data['secret'] = $this->core_secret;
        
        //dd($data);

        $response = Http::withHeaders([
            //'apikey' => $this->apiKey,
        ])->post("{$this->core_base_url}/{$this->core_servico}/{$this->core_apiKey}", $data);

        return $response->json();
    }

    public function get_clients_all(){
        $this->core_servico = 'get_clients_all';
        return $this->postData([]);
    }

    public function get_client($dados){
        $this->core_servico = 'get_client';
        return $this->postData($dados);
    }

    public function get_noprivado($dados){
        $this->core_servico = 'get_noprivado';
        return $this->postData($dados);
    }

    public function block_noprivado($dados){
        $this->core_servico = 'block_noprivado';
        return $this->postData($dados);
    }

    public function trial_create($dados){
        $this->core_servico = 'trial_create';
        return $this->postData($dados);
    }

    public function renew_client($dados){
        $this->core_servico = 'renew_client';
        return $this->postData($dados);
    }

    public function renew_noprivado($dados){
        $this->core_servico = 'renew_noprivado';
        return $this->postData($dados);
    }
}
