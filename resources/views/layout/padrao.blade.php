<html lang="pt-br">
<head>
    <title>Brasiliano</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
<div id="container">
    <div id="topo">
        <img src="topo_grande.gif" alt="Topo" width="100%">
    </div >
    <div id="menu">
        <ul class="navbar">
            <li><a href="quem-somos">Quem Somos</a>
            <li><a href="marcas">Marcas</a>
            <li><a href="produtos">Produtos</a>
            <li><a href="fale-conosco">Fale Conosco</a>
        </ul>
    </div >

    <div class="container">
        @yield('content')
    </div>

    <div id="rodape">
        <img src="barra.jpg" alt="Rodape">
    </div >
</div >
</body>
</html>