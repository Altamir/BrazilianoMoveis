@extends('layout.padrao')
@section('css_pag')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/fale_conosco.css">
@endsection
@section('content')
    <div id="formulario">
        <form id="form_contato">
            <label for="nome" id="nome">Nome:</label>
            <input type="text" id="nome">
            <label for="email" id="email">Email:</label>
            <input type="text" id="email">
            <label for="telefone" id="telefone">Telefone:</label>
            <input type="text" id="telefone">
            <label for="texto" id="texto">Texto:</label>
            <textarea id="texto" cols="22" rows="8"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <div id="endereco">
        <img src="mapa.jpg" alt="Mapa">
        <p>Avenida Assis Brasil, n°:2112, Passo da Areia</p>
    </div>
    </div >
@endsection
