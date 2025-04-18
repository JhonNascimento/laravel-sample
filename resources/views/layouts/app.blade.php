<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="JKIPTV - Assista seus canais favoritos em qualquer dispositivo. Mais de 2.000 canais em HD, filmes, séries e esportes ao vivo.">
    <meta name="keywords" content="IPTV, TV online, streaming, canais ao vivo, filmes, séries, esportes, JKIPTV">
    <meta name="author" content="JKIPTV">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="JKIPTV - TV Online em HD">
    <meta property="og:description" content="Assista seus canais favoritos em qualquer dispositivo. Mais de 2.000 canais em HD, filmes, séries e esportes ao vivo.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="JKIPTV - TV Online em HD">
    <meta property="twitter:description" content="Assista seus canais favoritos em qualquer dispositivo. Mais de 2.000 canais em HD, filmes, séries e esportes ao vivo.">
    <meta property="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JKIPTV - Seu Melhor Serviço de IPTV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #e74c3c;
            --accent-color: #3498db;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .navbar {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            background: linear-gradient(45deg, #4361ee, #3a0ca3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: all 0.3s ease;
        }
        
        .navbar-brand:hover {
            transform: scale(1.05);
        }
        
        .nav-link {
            color: #fff !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.2rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            background: linear-gradient(45deg, #4361ee, #3a0ca3);
            color: #fff !important;
        }
        
        .btn-whatsapp {
            background: linear-gradient(45deg, #06d6a0, #118ab2);
            color: #fff;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(6, 214, 160, 0.3);
        }
        
        .btn-whatsapp:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(6, 214, 160, 0.4);
            color: #fff;
        }
        
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        .navbar-toggler-icon {
            background-image: none;
            position: relative;
            width: 24px;
            height: 2px;
            background-color: #fff;
            display: block;
            transition: all 0.3s ease;
        }
        
        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after {
            content: '';
            position: absolute;
            width: 24px;
            height: 2px;
            background-color: #fff;
            transition: all 0.3s ease;
        }
        
        .navbar-toggler-icon::before {
            transform: translateY(-8px);
        }
        
        .navbar-toggler-icon::after {
            transform: translateY(8px);
        }
        
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
                padding: 1rem;
                border-radius: 0.5rem;
                margin-top: 1rem;
            }
            
            .nav-link {
                margin: 0.5rem 0;
            }
        }
        
        .hero-section {
            position: relative;
            overflow: hidden;
        }
        
        .hero-slide {
            padding: 100px 0;
            min-height: 600px;
            display: flex;
            align-items: center;
        }
        
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
            opacity: 1;
        }
        
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0,0,0,0.5);
            padding: 20px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
        
        .carousel-indicators {
            bottom: 20px;
        }
        
        .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 0 5px;
            background-color: #fff;
        }
        
        .carousel-indicators .active {
            background-color: var(--secondary-color);
        }
        
        .btn-success {
            background-color: #25D366;
            border-color: #25D366;
        }
        
        .btn-success:hover {
            background-color: #128C7E;
            border-color: #128C7E;
        }
        
        .feature-card {
            transition: transform 0.3s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .price-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s;
        }
        
        .price-card:hover {
            transform: translateY(-10px);
        }
        
        .btn-primary {
            background-color: var(--secondary-color);
            border: none;
            padding: 10px 30px;
            font-weight: bold;
        }
        
        .btn-primary:hover {
            background-color: #c0392b;
        }
        
        .footer {
            background-color: var(--primary-color);
            color: white;
            padding: 30px 0;
        }

        /* Estilos para a seção de jogos */
        .vs-badge {
            font-size: 2rem;
            font-weight: bold;
            color: #fff;
            background: rgba(255,255,255,0.2);
            padding: 10px 20px;
            border-radius: 50%;
            margin: 10px 0;
        }

        .match-info {
            margin-top: 10px;
        }

        .match-info .badge {
            font-size: 1rem;
            padding: 5px 10px;
            margin-bottom: 5px;
        }

        .bg-primary {
            background: linear-gradient(45deg, #1a237e, #0d47a1) !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-tv me-2"></i>JKIPTV
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#planos">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#canais">Canais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#duvidas">Dúvidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="https://wa.me/559285565783?text=Quero%20fazer%20um%20teste%20da%20JKIPTV" class="btn btn-whatsapp" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i>Solicitar Teste
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>JKIPTV</h5>
                    <p>Seu melhor serviço de IPTV com qualidade e estabilidade.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#planos" class="text-white">Planos</a></li>
                        <li><a href="#duvidas" class="text-white">Dúvidas</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 JKIPTV - Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-white me-3">Política de Privacidade</a>
                    <a href="#" class="text-white me-3">Termos de Uso</a>
                    <a href="#" class="text-white">Sobre Nós</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Adiciona classe active ao link atual
        document.addEventListener('DOMContentLoaded', function() {
            const currentLocation = window.location.hash;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentLocation) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html> 