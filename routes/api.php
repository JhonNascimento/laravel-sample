<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// dify
Route::get('/consultar-usuario/{cpf}', [ApiController::class, 'consultarUsuario']);
Route::get('/criar-teste/{cpf}/{remoteJid}/{bouquet}', [ApiController::class, 'criarTeste']);
Route::get('/criar-pagamento/{cpf}/{remoteJid}', [ApiController::class, 'criarPagamento']);
Route::post('/webhook-pagamento', [ApiController::class, 'webhookPagamento']);

// rotinas
Route::get('/vencimento/{dia}', [ApiController::class, 'vencimento']);

Route::get('/', function () {
    return response()->json([
        'message' => 'Bem-vindo à API da JK IPTV!',
        'status' => 'success'
    ]);
});
