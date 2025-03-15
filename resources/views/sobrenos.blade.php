@extends('layouts.app')

@section('title', 'Sobre Nós')

@section('styles')
<style>
    .about-section {
        padding: 60px 0;
    }
    
    .about-heading {
        color: #0056b3;
        font-weight: 700;
        margin-bottom: 30px;
    }
    
    .divider-custom {
        margin: 25px auto;
        width: 100%;
        max-width: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .divider-custom-line {
        width: 100%;
        max-width: 80px;
        height: 3px;
        background-color: #0056b3;
        border-radius: 2px;
    }
    
    .divider-custom-icon {
        color: #0056b3;
        font-size: 1.5rem;
        padding: 0 15px;
    }
    
    .about-image {
        transition: transform 0.3s ease;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .about-image:hover {
        transform: scale(1.02);
    }
    
    .about-text h2 {
        color: #0056b3;
        margin-bottom: 20px;
        font-weight: 600;
    }
    
    .about-text p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #495057;
    }
    
    .brand-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }
    
    .brand-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .brand-card .card-title {
        color: #0056b3;
        font-weight: 600;
    }
    
    .brand-card .card-body {
        padding: 20px;
    }
</style>
@endsection

@section('content')
<div class="container about-section">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h1 class="display-4 about-heading">Sobre Nós</h1>
            <div class="divider-custom my-4">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="{{ asset('images/fabrica1.jpg') }}" alt="Fábrica Pluma" class="img-fluid rounded about-image">
        </div>
        <div class="col-lg-6 about-text">
            <h2>Nossa História</h2>
            <p class="lead">Empresa fundada em 1998, inicialmente como Packpel, voltada para fabricação de sacos de papel. Em 2002 foi fundada a empresa Pluma, voltada para fabricação de guardanapos de papel, atualmente incorporadas em uma única empresa (Pluma artefatos de Papel LTDA), detentora das marcas Packpel, Poema e Pluma.</p>
        </div>
    </div>

    <div class="row align-items-center mb-5 flex-lg-row-reverse">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="{{ asset('images/fabrica2.jpg') }}" alt="Produção Pluma" class="img-fluid rounded about-image">
        </div>
        <div class="col-lg-6 about-text">
            <h2>Nossa Missão</h2>
            <p class="lead">Preocupada em ampliar seu mix de produtos e produzir com a melhor matéria prima disponível no mercado, nosso foco é estar sempre investindo qualidade no produto.</p>
        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="{{ asset('images/fabrica3.jpg') }}" alt="Produtos Pluma" class="img-fluid rounded about-image">
        </div>
        <div class="col-lg-6 about-text">
            <h2>Diferencial</h2>
            <p class="lead">Hoje é uma empresa que possui a linha mais completa no mercado, onde clientes tem a vantagem de comprar com o mesmo fornecedor vários itens em um mesmo pedido e na mesma entrega.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center">
            <h2 class="mb-4 about-heading">Nossas Marcas</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card brand-card h-100">
                        <img src="{{ asset('images/marca-packpel.jpg') }}" class="card-img-top" alt="Marca Packpel">
                        <div class="card-body">
                            <h5 class="card-title">Packpel</h5>
                            <p class="card-text">Especializada em sacos de papel desde 1998.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card brand-card h-100">
                        <img src="{{ asset('images/marca-poema.jpg') }}" class="card-img-top" alt="Marca Poema">
                        <div class="card-body">
                            <h5 class="card-title">Poema</h5>
                            <p class="card-text">Produtos de qualidade e sofisticação.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card brand-card h-100">
                        <img src="{{ asset('images/marca-pluma.jpg') }}" class="card-img-top" alt="Marca Pluma">
                        <div class="card-body">
                            <h5 class="card-title">Pluma</h5>
                            <p class="card-text">Especializada em guardanapos de papel desde 2002.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection