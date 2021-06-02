<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>Fábrica de Software</title>
        <link rel="stylesheet" href="{{ trim($page->baseUrl, '/') }}{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ trim($page->baseUrl, '/') }}{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <body class="text-gray-900 font-sans antialiased">

    <nav class="navbar">
        <ul>
                <li id="item-lista"><a href="">Notícias</a><li>
                <li id="item-lista"><a href="">Projetos</a><li>
                <li id="item-lista"><a href="">Início</a><li>
                <li id="item-lista"><a href="">Sobre</a><li>
                <li id="item-lista"><a href="">Contato</a><li>
              
            </ul>
        </nav>

        <div id="estrutura-inicio">
           
        <div id="git-caixa">
            <a id="git-link" href="https://github.com/fabsoftwareitp/s"><img src="git-logo4.svg" id="imagem-git"></a>
        </div>

        <div id="info-inicio">
            <div id="titulo-inicio">Fábrica De Software</div>
             <h2>IFSP Itapetininga</h2> 
             <div id="info-caixa">Estamos com vagas abertas até 23/12/2020, venha fazer parte do nosso time. </div>
             <a href="https://docs.google.com/forms/d/e/1FAIpQLSc0AD72z-Z0Dbz249VtXfLc9ZO_MVBp-biMd2zw_FHMmO_j-A/closedform" id="link-form"><div id="botao-caixa"><button id="botao" type="submit">Quero participar!</button></div></a>  
</div>

<div id="imagem-fab">
    <img src="logo-oficial.png" id="logo-fab">
</div>


</div>

<div id="linha-laranja"> <img src="left.png" id="imagem-icone"> <img src="right.png" id="imagem-icone"></div>

     <div id="sobre-caixa">
         <h3>Sobre o projeto</h3>
         <div id="sobre-texto">A Fábrica de Software é uma iniciativa liderada pelo Prof. Me. Danilo Camargo Bueno, e têm como objetivo<p>
              o desenvolvimento, a prática e a evolução nos âmbitos da criação de software. Neste sentido, os</p>
               participantes do projeto podem ter, dentre outras, as seguintes oportunidades:
</div>
     
      <div id="oportunidades-caixa">
          <div id="oportunidade"><div id="bola"></div><h4>Conhecer diferentes<br> tecnologias</h4> </div>
          <div id="oportunidade"><div id="bola"></div><h4>Enfrentar desafios reais</h4> </div>
          <div id="oportunidade"><div id="bola"></div><h4>Trabalhar em equipe</h4> </div>

</div>
</div>
<div id="estrutura-videos">
<h1>Depoimentos</h1>
<div id="caixas-videos">



<div id="membro-video">
    <iframe width="100%" height="247" src="https://www.youtube.com/embed/B1bys3rAuL8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <strong>Rafael Damiam</strong>
    <iframe width="548" height="247" src="https://www.youtube.com/embed/sDcW1keRIDs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <strong>Vinicius Zevarex</strong>
</div>

<div id="membro-video">
    <iframe width="548" height="247" src="https://www.youtube.com/embed/D054k8JNOm4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    <strong>João Moraiz</strong>

    <iframe width="548" height="247" src="https://www.youtube.com/embed/aw3LTiobEYs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <strong>Lucas Cavalherie</strong>
</div>

</div>
<h1 id="titulo-equipe">Equipe Fábrica de Software</h1>

<h1 id="titulo-noticias">Últimas notícias</h1>

<a href="https://ic.itp.ifsp.edu.br/fabsoftware/noticias"><button id="botao-fim">Ver mais...</button></a>

    </div>
    </body>
</html>
