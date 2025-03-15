<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pluma - Fábrica de Papéis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #2c5282;
            --secondary-blue: #4a6fa5;
            --light-blue: #e2e8f0;
            --accent-blue: #1a365d;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar {
            background-color: white !important;
        }
        
        .navbar-brand img {
            height: 50px;
        }
        
        .hero-section {
            background-color: var(--light-blue);
            padding: 100px 0;
            color: var(--accent-blue);
        }
        
        .btn-primary {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }
        
        .btn-primary:hover {
            background-color: var(--accent-blue);
            border-color: var(--accent-blue);
        }
        
        .btn-outline-primary {
            color: var(--primary-blue);
            border-color: var(--primary-blue);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }
        
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-title {
            color: var(--primary-blue);
        }
        
        .footer {
            background-color: var(--accent-blue);
            color: white;
            padding: 40px 0;
            margin-top: 50px;
        }
        
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Pluma Papéis Logo" onerror="this.src='https://via.placeholder.com/150x50?text=Pluma+Papéis'">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sustentabilidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1>Bem-vindo à Pluma Papéis</h1>
            <p class="lead">Qualidade e sustentabilidade em cada folha produzida</p>
            <button class="btn btn-primary mt-3">Conheça Nossos Produtos</button>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Linha de Produtos</h5>
                        <p class="card-text">Papéis para diversas finalidades, produzidos com as melhores matérias-primas e tecnologia avançada.</p>
                        <a href="#" class="btn btn-outline-primary">Ver Catálogo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Compromisso Ambiental</h5>
                        <p class="card-text">Nossa produção segue rigorosos padrões de sustentabilidade, com reflorestamento e economia de recursos.</p>
                        <a href="#" class="btn btn-outline-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fale Conosco</h5>
                        <p class="card-text">Entre em contato para solicitar amostras, orçamentos ou conhecer nossas soluções personalizadas.</p>
                        <a href="#" class="btn btn-outline-primary">Contato</a>
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
                    <h5>Pluma Papéis</h5>
                    <p>Tradição e inovação na fabricação de papéis de qualidade desde 1985</p>
                </div>
                <div class="col-md-4">
                    <h5>Navegação</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Início</a></li>
                        <li><a href="#" class="text-white">Sobre Nós</a></li>
                        <li><a href="#" class="text-white">Produtos</a></li>
                        <li><a href="#" class="text-white">Sustentabilidade</a></li>
                        <li><a href="#" class="text-white">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <address>
                        <p>Endereço: Av. das Indústrias, 1000</p>
                        <p>Telefone: (11) 1234-5678</p>
                        <p>Email: contato@plumapapeis.com.br</p>
                    </address>
                </div>
            </div>
            <div class="text-center mt-4">
                <p>&copy; {{ date('Y') }} Pluma Papéis. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>