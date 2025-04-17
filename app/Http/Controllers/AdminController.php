<?php

namespace App\Http\Controllers;

use App\Models\TesteNoprivado;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Buscar todos os testes ativos
        $testesAtivos = TesteNoprivado::where('status', 'active')
            ->where('end_time', '>', now())
            ->get();

        // Buscar todos os testes
        $todosTestes = TesteNoprivado::orderBy('id', 'desc')
            ->get();

        return view('admin.index', compact('testesAtivos', 'todosTestes'));
    }
} 