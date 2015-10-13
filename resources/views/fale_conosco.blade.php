@extends('layout.layout_bootstrap')
@section('css_pag')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/fale_conosco.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="nome" id="nome">Nome:</label>
                    <input class="form-control" type="text" id="nome">
                </div>
                <div class="form-group">
                    <label for="email" id="email">Email:</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="telefone" id="telefone">Telefone:</label>
                    <input type="text" class="form-control" id="telefone">
                </div>
                <div class="form-group">
                    <label for="texto" id="texto">Texto:</label>
                    <textarea id="texto" class="form-control" cols="22" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-md-6">
            <div>
                <img class="img-responsive" src="{{asset('imagens/mapa.jpg')}}" alt="Mapa">
                <address>
                    <p>Assis Brasil, n°:2112, Passo da Areia</p>
                </address>
            </div>
        </div>
    </div>
@endsection
