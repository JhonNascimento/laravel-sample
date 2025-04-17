@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">Painel Administrativo</div>

                <div class="card-body">
                    <h4>Testes Ativos</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Início</th>
                                    <th>Fim</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($testesAtivos as $teste)
                                <tr>
                                    <td>{{ $teste->id }}</td>
                                    <td>{{ $teste->username }}</td>
                                    <td>{{ $teste->start_time->format('d/m/Y H:i') }}</td>
                                    <td>{{ $teste->end_time->format('d/m/Y H:i') }}</td>
                                    <td>{{ $teste->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">Todos os Testes</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Início</th>
                                    <th>Fim</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($todosTestes as $teste)
                                <tr>
                                    <td>{{ $teste->id }}</td>
                                    <td>{{ $teste->username }}</td>
                                    <td>{{ $teste->start_time->format('d/m/Y H:i') }}</td>
                                    <td>{{ $teste->end_time->format('d/m/Y H:i') }}</td>
                                    <td>{{ $teste->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer mt-auto py-3 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0">© {{ date('Y') }} JKIPTV. Todos os direitos reservados.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">Versão 1.0.0</p>
            </div>
        </div>
    </div>
</footer>

<style>
    html, body {
        height: 100%;
    }
    
    body {
        display: flex;
        flex-direction: column;
        padding-top: 60px; /* Altura do navbar */
    }
    
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }
    
    .content {
        flex: 1 0 auto;
    }
    
    .footer {
        flex-shrink: 0;
        width: 100%;
    }
    
    .card {
        margin-bottom: 20px;
    }
    
    .table {
        margin-bottom: 0;
    }
</style>
@endsection