@extends('layouts.app')

@section('content')
    <style>
        .hero-section {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        }
        
        .hero-slide {
            background-blend-mode: multiply;
        }

        .feature-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .price-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .price-card:hover {
            transform: translateY(-5px);
        }

        .btn-primary {
            background: linear-gradient(45deg, #4361ee 0%, #3a0ca3 100%);
            border: none;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #3a0ca3 0%, #4361ee 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(67, 97, 238, 0.4);
        }

        .btn-success {
            background: linear-gradient(45deg, #06d6a0 0%, #118ab2 100%);
            border: none;
            box-shadow: 0 4px 15px rgba(6, 214, 160, 0.3);
        }

        .btn-success:hover {
            background: linear-gradient(45deg, #118ab2 0%, #06d6a0 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(6, 214, 160, 0.4);
        }

        #canais {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        #duvidas {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        }

        .accordion-button:not(.collapsed) {
            background: linear-gradient(45deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
        }

        .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }

        footer {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        }

        .social-links a {
            transition: transform 0.3s ease;
        }

        .social-links a:hover {
            transform: translateY(-3px);
        }

        .bg-light {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%) !important;
        }

        .bg-dark {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%) !important;
        }

        /* Estilos para os cards de canais */
        .channel-card {
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .channel-card:hover {
            transform: translateY(-5px);
        }

        .channel-card img {
            max-height: 60px;
            width: auto;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .channel-card p {
            font-weight: 500;
            color: #333;
        }

        .nav-pills .nav-link {
            color: #ffffff;
            background-color: #6c757d;
            border: none;
            margin: 0 5px;
            padding: 12px 25px;
            font-weight: 600;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .nav-pills .nav-link:hover {
            background-color: #5a6268;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .nav-pills .nav-link.active {
            background: linear-gradient(45deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
            transform: translateY(-2px);
        }

        #canaisTabs {
            margin-bottom: 2rem;
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-white">
                                    <h1 class="display-4 fw-bold mb-4">JKIPTV</h1>
                                    <p class="lead mb-4">Assista seus canais favoritos em qualquer dispositivo, a qualquer hora!</p>
                                    <div class="d-flex gap-3">
                                        <a href="#planos" class="btn btn-primary btn-lg">Conheça Nossos Planos</a>
                                        <a href="https://wa.me/5592855657830?text=Quero%20fazer%20um%20teste%20da%20JKIPTV" class="btn btn-success btn-lg" target="_blank">
                                            <i class="fab fa-whatsapp me-2"></i>Solicitar Teste
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-dark text-white p-4">
                                        <h3 class="mb-4">Quando e onde desejar.</h3>
                                        <p class="mb-4">Não deixe para depois, você não vai querer ficar de fora dessa.</p>
                                        <div class="d-flex gap-2">
                                            <a href="#duvidas" class="btn btn-outline-light">Dúvidas</a>
                                            <a href="https://wa.me/5592855657830?text=Quero%20fazer%20um%20teste%20da%20JKIPTV" class="btn btn-success" target="_blank">
                                                <i class="fab fa-whatsapp me-2"></i>Solicitar Teste
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1626814026160-2237a95fc5a0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-white">
                                    <h1 class="display-4 fw-bold mb-4">JKIPTV</h1>
                                    <p class="lead mb-4">Mais de 10.000 canais em HD e conteúdo exclusivo!</p>
                                    <div class="d-flex gap-3">
                                        <a href="#planos" class="btn btn-primary btn-lg">Conheça Nossos Planos</a>
                                        <a href="https://wa.me/5592855657830?text=Quero%20fazer%20um%20teste%20da%20JKIPTV" class="btn btn-success btn-lg" target="_blank">
                                            <i class="fab fa-whatsapp me-2"></i>Solicitar Teste
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-dark text-white p-4">
                                        <h3 class="mb-4">Filmes e Séries</h3>
                                        <p class="mb-4">Catálogo completo atualizado diariamente com os melhores conteúdos.</p>
                                        <div class="d-flex gap-2">
                                            <a href="#planos" class="btn btn-outline-light">Ver Planos</a>
                                            <a href="https://wa.me/5592855657830?text=Quero%20fazer%20um%20teste%20da%20JKIPTV" class="btn btn-success" target="_blank">
                                                <i class="fab fa-whatsapp me-2"></i>Solicitar Teste
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1522869635100-9f4c5e86aa37?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-white">
                                    <h1 class="display-4 fw-bold mb-4">JKIPTV</h1>
                                    <p class="lead mb-4">Todos os seus serviços de streaming em um só lugar!</p>
                                    <div class="d-flex gap-3">
                                        <a href="#planos" class="btn btn-primary btn-lg">Conheça Nossos Planos</a>
                                        <a href="https://wa.me/5592855657830?text=Quero%20fazer%20um%20teste%20da%20JKIPTV" class="btn btn-success btn-lg" target="_blank">
                                            <i class="fab fa-whatsapp me-2"></i>Solicitar Teste
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-dark text-white p-4">
                                        <h3 class="mb-4">Netflix, HBO Max, TNT e mais</h3>
                                        <p class="mb-4">Acesso a todos os principais serviços de streaming em uma única assinatura.</p>
                                        <div class="d-flex gap-2">
                                            <a href="#planos" class="btn btn-outline-light">Ver Planos</a>
                                            <a href="https://wa.me/5592855657830?text=Quero%20fazer%20um%20teste%20da%20JKIPTV" class="btn btn-success" target="_blank">
                                                <i class="fab fa-whatsapp me-2"></i>Solicitar Teste
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-white">
                                    <h1 class="display-4 fw-bold mb-4">JKIPTV</h1>
                                    <p class="lead mb-4">Conteúdo exclusivo e atualizado diariamente!</p>
                                    <div class="d-flex gap-3">
                                        <a href="#planos" class="btn btn-primary btn-lg">Conheça Nossos Planos</a>
                                        <a href="https://wa.me/5592855657830?text=Quero%20fazer%20um%20teste%20da%20JKIPTV" class="btn btn-success btn-lg" target="_blank">
                                            <i class="fab fa-whatsapp me-2"></i>Solicitar Teste
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-dark text-white p-4">
                                        <h3 class="mb-4">Lançamentos em Primeira Mão</h3>
                                        <p class="mb-4">Assista aos lançamentos dos principais serviços de streaming no mesmo dia.</p>
                                        <div class="d-flex gap-2">
                                            <a href="#planos" class="btn btn-outline-light">Ver Planos</a>
                                            <a href="https://wa.me/5592855657830?text=Quero%20fazer%20um%20teste%20da%20JKIPTV" class="btn btn-success" target="_blank">
                                                <i class="fab fa-whatsapp me-2"></i>Solicitar Teste
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </section>

    <!-- Canais Section -->
    <section id="canais" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Nossos Canais</h2>
            <div class="text-center mb-4">
                <p class="lead">Mais de 2.000 canais em alta qualidade</p>
            </div>

            <!-- Categorias de Canais -->
            <div class="row mb-4">
                <div class="col-12">
                    <ul class="nav nav-pills justify-content-center mb-4" id="canaisTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="filmes-tab" data-bs-toggle="pill" data-bs-target="#filmes" type="button" role="tab">Filmes e Séries</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="esportes-tab" data-bs-toggle="pill" data-bs-target="#esportes" type="button" role="tab">Esportes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="infantil-tab" data-bs-toggle="pill" data-bs-target="#infantil" type="button" role="tab">Infantil</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="documentarios-tab" data-bs-toggle="pill" data-bs-target="#documentarios" type="button" role="tab">Documentários</button>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Conteúdo das Categorias -->
            <div class="tab-content" id="canaisTabsContent">
                <!-- Filmes e Séries -->
                <div class="tab-pane fade show active" id="filmes" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://www.netflix.com/favicon.ico" alt="Netflix" class="img-fluid mb-2">
                                <p class="mb-0">Netflix</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/HBO_Max_Logo.svg/1200px-HBO_Max_Logo.svg.png" alt="HBO Max" class="img-fluid mb-2">
                                <p class="mb-0">HBO Max</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://www.disneyplus.com/favicon.ico" alt="Disney+" class="img-fluid mb-2">
                                <p class="mb-0">Disney+</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://logodownload.org/wp-content/uploads/2018/07/prime-video-logo-1.png" alt="Prime Video" class="img-fluid mb-2">
                                <p class="mb-0">Prime Video</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://logodownload.org/wp-content/uploads/2021/09/star-plus-logo.png" alt="Star+" class="img-fluid mb-2">
                                <p class="mb-0">Star+</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://logodownload.org/wp-content/uploads/2021/03/paramount-plus-logo.png" alt="Paramount+" class="img-fluid mb-2">
                                <p class="mb-0">Paramount+</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Esportes -->
                <div class="tab-pane fade" id="esportes" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://www.espn.com/favicon.ico" alt="ESPN" class="img-fluid mb-2">
                                <p class="mb-0">ESPN</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://logodownload.org/wp-content/uploads/2017/07/sportv-logo.png" alt="SporTV" class="img-fluid mb-2">
                                <p class="mb-0">SporTV</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://seeklogo.com/images/P/premiere-fc-logo-83735BBAF3-seeklogo.com.png" alt="Premiere" class="img-fluid mb-2">
                                <p class="mb-0">Premiere</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://www.dazn.com/favicon.ico" alt="DAZN" class="img-fluid mb-2">
                                <p class="mb-0">DAZN</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://combate.globo.com/favicon.ico" alt="Combate" class="img-fluid mb-2">
                                <p class="mb-0">Combate</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://www.foxsports.com/favicon.ico" alt="Fox Sports" class="img-fluid mb-2">
                                <p class="mb-0">Fox Sports</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Infantil -->
                <div class="tab-pane fade" id="infantil" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://logodownload.org/wp-content/uploads/2018/06/cartoon-network-logo.png" alt="Cartoon Network" class="img-fluid mb-2">
                                <p class="mb-0">Cartoon Network</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://logodownload.org/wp-content/uploads/2018/11/nickelodeon-logo.png" alt="Nickelodeon" class="img-fluid mb-2">
                                <p class="mb-0">Nickelodeon</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://seeklogo.com/images/D/discovery-kids-2021-logo-918E4E604F-seeklogo.com.png" alt="Discovery Kids" class="img-fluid mb-2">
                                <p class="mb-0">Discovery Kids</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://seeklogo.com/images/B/Boomerang-logo-6B18789F35-seeklogo.com.png" alt="Boomerang" class="img-fluid mb-2">
                                <p class="mb-0">Boomerang</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://logodownload.org/wp-content/uploads/2018/11/nick-jr-logo.png" alt="Nick Jr." class="img-fluid mb-2">
                                <p class="mb-0">Nick Jr.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://seeklogo.com/images/D/Discovery_Channel-logo-B0EC00FE82-seeklogo.com.png" alt="Discovery Channel" class="img-fluid mb-2">
                                <p class="mb-0">Discovery Channel</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Documentários -->
                <div class="tab-pane fade" id="documentarios" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://logodownload.org/wp-content/uploads/2017/04/national-geographic-logo.png" alt="National Geographic" class="img-fluid mb-2">
                                <p class="mb-0">National Geographic</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://logodownload.org/wp-content/uploads/2018/12/history-channel-logo.png" alt="History Channel" class="img-fluid mb-2">
                                <p class="mb-0">History Channel</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://logodownload.org/wp-content/uploads/2020/06/animal-planet-logo.png" alt="Animal Planet" class="img-fluid mb-2">
                                <p class="mb-0">Animal Planet</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="channel-card text-center">
                                <img src="https://logodownload.org/wp-content/uploads/2019/09/investigation-discovery-logo.png" alt="Investigation Discovery" class="img-fluid mb-2">
                                <p class="mb-0">Investigation Discovery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#planos" class="btn btn-primary btn-lg">Assine Agora</a>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="planos" class="py-5" style="background: linear-gradient(135deg, #1a237e 0%, #0d47a1 100%);">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-warning text-dark mb-2 px-3 py-2 rounded-pill">Melhor Oferta</span>
                <h2 class="display-4 fw-bold text-white mb-2">JK Play</h2>
                <p class="text-light opacity-75">O melhor plano de IPTV por apenas</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card price-card border-0 shadow-lg hover-effect" style="border-radius: 20px; background: rgba(255, 255, 255, 0.95);">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <div class="price-tag position-relative d-inline-block">
                                    <span class="position-absolute top-0 start-0 translate-middle badge bg-danger rounded-pill" style="font-size: 0.8rem;">
                                        Oferta Limitada
                                    </span>
                                    <h3 class="display-4 fw-bold text-primary mb-0">R$ 20,00</h3>
                                    <p class="text-muted">por mês</p>
                                </div>
                            </div>

                            <!-- Principais Características -->
                            <div class="features-grid mb-4">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 bg-light rounded-3 d-flex align-items-center">
                                            <i class="fas fa-film text-primary fa-2x me-3"></i>
                                            <div>
                                                <h6 class="mb-1">+300 mil</h6>
                                                <small class="text-muted">Conteúdos</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 bg-light rounded-3 d-flex align-items-center">
                                            <i class="fas fa-tv text-primary fa-2x me-3"></i>
                                            <div>
                                                <h6 class="mb-1">Qualidade</h6>
                                                <small class="text-muted">SD até 4K HDR</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 bg-light rounded-3 d-flex align-items-center">
                                            <i class="fas fa-broadcast-tower text-primary fa-2x me-3"></i>
                                            <div>
                                                <h6 class="mb-1">100+ Rádios</h6>
                                                <small class="text-muted">Ao Vivo</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 bg-light rounded-3 d-flex align-items-center">
                                            <i class="fas fa-calendar-alt text-primary fa-2x me-3"></i>
                                            <div>
                                                <h6 class="mb-1">EPG</h6>
                                                <small class="text-muted">Guia Completo</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Recursos -->
                            <div class="features mb-4">
                                <h5 class="text-primary mb-3">Recursos Inclusos</h5>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            <span>1 Conexão Simultânea</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            <span>Canais Adultos (Opcional)</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            <span>Suporte 24/7</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            <span>Atualização Diária</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dispositivos -->
                            <div class="devices mb-4">
                                <h5 class="text-primary mb-3">Disponível em</h5>
                                <div class="device-grid">
                                    <div class="row g-2">
                                        <div class="col-6 col-md-4">
                                            <div class="device-item text-center p-2">
                                                <i class="fas fa-tv fa-lg mb-2 text-primary"></i>
                                                <p class="small mb-0">Smart TV</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="device-item text-center p-2">
                                                <i class="fas fa-box fa-lg mb-2 text-primary"></i>
                                                <p class="small mb-0">TV Box</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="device-item text-center p-2">
                                                <i class="fas fa-desktop fa-lg mb-2 text-primary"></i>
                                                <p class="small mb-0">Web Player</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="device-item text-center p-2">
                                                <i class="fab fa-android fa-lg mb-2 text-primary"></i>
                                                <p class="small mb-0">Android</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="device-item text-center p-2">
                                                <i class="fab fa-apple fa-lg mb-2 text-primary"></i>
                                                <p class="small mb-0">iPhone</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="device-item text-center p-2">
                                                <i class="fas fa-tablet-alt fa-lg mb-2 text-primary"></i>
                                                <p class="small mb-0">Tablet</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-2">
                                        <small class="text-muted">
                                            + Chromecast, FireStick, PlayStation, Xbox e outros
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <!-- Botões de Ação -->
                            <div class="action-buttons">
                                <div class="d-grid gap-2">
                                    <a href="https://wa.me/5592855657830?text=Quero%20assinar%20o%20plano%20JK%20Play" 
                                       class="btn btn-primary btn-lg position-relative overflow-hidden" 
                                       target="_blank"
                                       style="background: linear-gradient(45deg, #2196f3, #1976d2);">
                                        <i class="fab fa-whatsapp me-2"></i>
                                        <span>Assinar Agora</span>
                                        <div class="ripple"></div>
                                    </a>
                                    <a href="https://wa.me/5592855657830?text=Quero%20fazer%20um%20teste%20da%20JKIPTV" 
                                       class="btn btn-outline-primary btn-lg" 
                                       target="_blank">
                                        <i class="fas fa-play-circle me-2"></i>
                                        Teste Grátis
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <small class="text-light opacity-75">
                    <i class="fas fa-info-circle me-1"></i>
                    Canais adultos são opcionais, podendo ser solicitada a adição ou remoção a qualquer momento
                </small>
            </div>
        </div>

        <style>
            .hover-effect {
                transition: transform 0.3s ease;
            }
            .hover-effect:hover {
                transform: translateY(-5px);
            }
            .feature-item {
                transition: all 0.3s ease;
                border: 1px solid rgba(0,0,0,0.1);
            }
            .feature-item:hover {
                background: #f8f9fa;
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }
            .device-item {
                transition: all 0.3s ease;
                border-radius: 10px;
            }
            .device-item:hover {
                background: #f8f9fa;
                transform: translateY(-2px);
            }
            .btn-primary {
                position: relative;
                overflow: hidden;
                z-index: 1;
            }
            .ripple {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(45deg, rgba(255,255,255,0.1), rgba(255,255,255,0.2));
                transform: translateX(-100%);
                animation: ripple 1.5s infinite;
            }
            @keyframes ripple {
                0% {
                    transform: translateX(-100%);
                }
                100% {
                    transform: translateX(100%);
                }
            }
            .badge {
                font-weight: 500;
            }
            .price-tag {
                padding: 1rem;
                border-radius: 15px;
                background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            }
        </style>
    </section>

    <!-- Jogos do Dia Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">⚽ Jogos de Hoje</h2>
                <p class="lead">Acompanhe todos os jogos ao vivo em HD</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body text-center">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <i class="fas fa-futbol fa-5x mb-3"></i>
                                    <h4>Futebol</h4>
                                    <p>Campeonatos Nacionais e Internacionais</p>
                                </div>
                                <div class="col-md-3">
                                    <i class="fas fa-basketball-ball fa-5x mb-3"></i>
                                    <h4>Basquete</h4>
                                    <p>NBA e Liga Nacional</p>
                                </div>
                                <div class="col-md-3">
                                    <i class="fas fa-flag-checkered fa-5x mb-3"></i>
                                    <h4>Fórmula 1</h4>
                                    <p>Corridas ao vivo</p>
                                </div>
                                <div class="col-md-3">
                                    <i class="fas fa-fist-raised fa-5x mb-3"></i>
                                    <h4>UFC</h4>
                                    <p>Lutas ao vivo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="https://guiadeconteudo.blog/jogos" class="btn btn-light btn-lg" target="_blank">
                    <i class="fas fa-tv me-2"></i>Ver Jogos de Hoje
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="duvidas" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Perguntas Frequentes</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    O que é a JKIPTV?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Somos um serviço de tv por assinatura e VOD (video on demand) online que oferece uma ampla variedade de conteúdo, incluindo filmes, séries, esportes e muito mais, disponível para assistir em diferentes dispositivos conectados à internet.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Como posso acessar a JKIPTV?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Para acessar a JKIPTV, você precisa se tornar um assinante. Após adquirir um plano, você receberá as instruções de acesso para desfrutar de todo o conteúdo disponível.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Quais são as formas de pagamento?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Aceitamos diferentes formas de pagamento, incluindo PIX, cartões de crédito e transferência bancária. As opções de pagamento serão fornecidas durante o processo de assinatura.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Quais são as vantagens da JKIPTV?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Temos servidores avançados que garantem uma transmissão estável e sem interrupções. Além disso, oferecemos uma biblioteca com mais de 40 mil opções de entretenimento, para que você nunca fique sem opções.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Posso assistir em diferentes dispositivos?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sim, você pode assistir ao nosso conteúdo em diversos dispositivos, como celulares, tablets, notebooks e Smart TVs. Basta ter uma conexão com a internet.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                    A JKIPTV oferece garantia de satisfação?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sim, estamos comprometidos em fornecer uma experiência de qualidade aos nossos assinantes. Se, por algum motivo, você não estiver satisfeito com o serviço, entre em contato conosco para analisarmos a situação e encontrar uma solução adequada.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 