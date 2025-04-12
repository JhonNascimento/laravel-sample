@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">JKIPTV - Sua TV Online</h1>
            <p class="lead mb-5">Assista seus canais favoritos em qualquer dispositivo, a qualquer hora!</p>
            <a href="#planos" class="btn btn-primary btn-lg">Conheça Nossos Planos</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Por que escolher a JKIPTV?</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-tv fa-3x mb-3 text-primary"></i>
                            <h5>+10.000 Canais</h5>
                            <p>Canais nacionais e internacionais em HD</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-film fa-3x mb-3 text-primary"></i>
                            <h5>Filmes e Séries</h5>
                            <p>Catálogo completo atualizado diariamente</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt fa-3x mb-3 text-primary"></i>
                            <h5>Multiplataforma</h5>
                            <p>Assista em qualquer dispositivo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-headset fa-3x mb-3 text-primary"></i>
                            <h5>Suporte 24/7</h5>
                            <p>Atendimento personalizado via WhatsApp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="planos" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Nossos Planos</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card price-card mb-4">
                        <div class="card-body text-center">
                            <h3 class="card-title">Plano Mensal</h3>
                            <div class="price">
                                <span class="text-decoration-line-through text-muted">R$ 24,99</span>
                                <h2 class="text-primary">R$ 20,00</h2>
                                <small class="text-muted">por mês</small>
                            </div>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><i class="fas fa-check text-success me-2"></i> +10.000 Canais</li>
                                <li><i class="fas fa-check text-success me-2"></i> Filmes e Séries</li>
                                <li><i class="fas fa-check text-success me-2"></i> Canais Adultos</li>
                                <li><i class="fas fa-check text-success me-2"></i> Suporte 24/7</li>
                                <li><i class="fas fa-check text-success me-2"></i> 3 Dispositivos</li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100">Assinar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Channels Section -->
    <section id="canais" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Nossos Canais</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card feature-card">
                        <div class="card-body text-center">
                            <i class="fas fa-futbol fa-3x mb-3 text-primary"></i>
                            <h5>Esportes</h5>
                            <p>Premier League, Champions League, F1 e mais</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card feature-card">
                        <div class="card-body text-center">
                            <i class="fas fa-film fa-3x mb-3 text-primary"></i>
                            <h5>Filmes</h5>
                            <p>Lançamentos e clássicos em HD</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card feature-card">
                        <div class="card-body text-center">
                            <i class="fas fa-tv fa-3x mb-3 text-primary"></i>
                            <h5>TV Aberta</h5>
                            <p>Todos os canais abertos em HD</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card feature-card">
                        <div class="card-body text-center">
                            <i class="fas fa-adult fa-3x mb-3 text-primary"></i>
                            <h5>Adultos</h5>
                            <p>Canais exclusivos 24h</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contato" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Entre em Contato</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Mensagem</label>
                                    <textarea class="form-control" id="message" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Enviar Mensagem</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 