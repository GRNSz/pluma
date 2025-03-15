<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pluma - Bem-vindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand img {
            height: 40px;
        }
        .hero-section {
            background-color: #f8f9fa;
            padding: 100px 0;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Pluma Logo" onerror="this.src='https://via.placeholder.com/150x50?text=Pluma'">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Localização</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contatos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1>Bem-vindo à Pluma</h1>
            <p class="lead">Inovação e qualidade para o seu negócio</p>
            <button class="btn btn-primary mt-3">Saiba mais</button>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Nossos Produtos</h5>
                        <p class="card-text">Conheça nossa linha completa de produtos desenvolvidos com tecnologia de ponta.</p>
                        <a href="#" class="btn btn-outline-primary">Ver Produtos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Sobre a Empresa</h5>
                        <p class="card-text">Saiba mais sobre nossa história, missão, visão e valores que norteiam nosso trabalho.</p>
                        <a href="#" class="btn btn-outline-primary">Conheça-nos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Contato</h5>
                        <p class="card-text">Entre em contato com nossa equipe para tirar dúvidas ou solicitar orçamentos.</p>
                        <a href="#" class="btn btn-outline-primary">Fale Conosco</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Pluma</h5>
                    <p>Soluções inovadoras para o seu negócio</p>
                </div>
                <div class="col-md-4">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">A Empresa</a></li>
                        <li><a href="#" class="text-white">Produtos</a></li>
                        <li><a href="#" class="text-white">Localização</a></li>
                        <li><a href="#" class="text-white">Contatos</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <address>
                        <p>Endereço: Av. Principal, 1000</p>
                        <p>Telefone: (11) 1234-5678</p>
                        <p>Email: contato@pluma.com.br</p>
                    </address>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; {{ date('Y') }} Pluma. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>