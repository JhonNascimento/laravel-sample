<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JKIPTV - Sua TV Online</title>
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
            background-color: var(--primary-color);
        }
        
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1574375927938-d5a98e8ffe85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
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
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>JKIPTV</h5>
                    <p>Sua melhor experiência em TV online</p>
                </div>
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <p><i class="fab fa-whatsapp me-2"></i> (92) 99999-9999</p>
                    <p><i class="fas fa-envelope me-2"></i> contato@jkiptv.com</p>
                </div>
                <div class="col-md-4">
                    <h5>Redes Sociais</h5>
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 