<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <header>
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
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
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
</body>
</html>