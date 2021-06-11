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

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>

<body class="text-gray-900 font-sans antialiased">

    <nav class="navbar">
        <ul>
            <li class="item-lista"><a href="">Notícias</a><li>
            <li class="item-lista"><a href="">Projetos</a><li>
            <li class="item-lista"><a href="">Início</a><li>
            <li class="item-lista"><a href="">Sobre</a><li>
            <li class="item-lista"><a href="">Contato</a><li>

        </ul>
    </nav>

    <div id="estrutura-inicio">

        <div id="git-caixa">
            <a id="git-link" href="https://github.com/fabsoftwareitp/s"><img src="assets/images/git-logo4.svg" id="imagem-git"></a>
        </div>
        <div id="estrutura-maior">
            <div id="info-inicio">
                <div id="titulo-inicio">Fábrica De Software</div>
                <h2>IFSP Itapetininga</h2>

            </div>

            <div id="imagem-fab">
                <img src="assets/images/logo-oficial.png" id="logo-fab">
            </div>

        </div>


    </div>

    <div id="linha-laranja"> <img src="assets/images/left.png" id="imagem-icone"> <img src="assets/images/right.png" id="imagem-icone"></div>

    <div id="sobre-caixa">
        <h3>Sobre o projeto</h3>
        <div id="sobre-texto">A Fábrica de Software é uma iniciativa liderada pelo Prof. Me. Danilo Camargo Bueno, e têm
            como objetivo<p>
                o desenvolvimento, a prática e a evolução nos âmbitos da criação de software. Neste sentido, os</p>
            participantes do projeto podem ter, dentre outras, as seguintes oportunidades:
        </div>

        <div id="oportunidades-caixa">
            <div class="oportunidade">
                <div class="bola"></div>
                <h4>Conhecer diferentes<br> tecnologias</h4>
            </div>
            <div class="oportunidade">
                <div class="bola"></div>
                <h4>Enfrentar desafios reais</h4>
            </div>
            <div class="oportunidade">
                <div class="bola"></div>
                <h4>Trabalhar em equipe</h4>
            </div>

        </div>
    </div>

    <div id="estrutura-videos">
        <h1>Depoimentos</h1>
        <div id="caixa-videos">



            <div class="membro-video">
                <iframe width="548" height="247" src="https://www.youtube.com/embed/B1bys3rAuL8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <strong>Rafael Damiam</strong>
                <iframe width="548" height="247" src="https://www.youtube.com/embed/sDcW1keRIDs"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <strong>Vinicius Zevarex</strong>
            </div>

            <div class="membro-video">
                <iframe width="548" height="247" src="https://www.youtube.com/embed/D054k8JNOm4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

                <strong>João Moraiz</strong>

                <iframe width="548" height="247" src="https://www.youtube.com/embed/aw3LTiobEYs"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <strong>Lucas Cavalherie</strong>
            </div>

        </div>
        <h1 id="titulo-equipe">Equipe Fábrica de Software</h1>

        <h1 id="titulo-noticias">Últimas notícias</h1>

        <a href="https://ic.itp.ifsp.edu.br/fabsoftware/noticias"><button id="botao-fim">Ver mais...</button></a>

    </div>

    <div id="rodapé">

        <div class="topicos">
            <div class="titulo-topicos">
                <p><strong>Dedicado aos Membros</strong></p>
            </div>

            <div id="caixa-nomes">
                <div class="coluna-nomes">
                    <p class="nome">Pedro Gois</p>
                    <p class="nome">Vinicius Zevarex</p>
                    <p class="nome">Bruno Shanoski</p>
                    <p class="nome">Samuel Fachetti</p>
                </div>
                <div class="coluna-nomes">
                    <p class="nome">João Morais</p>
                    <p class="nome">Rafael Damiam</p>
                    <p class="nome">Lucas Cavalherie</p>
                    <p class="nome">Neemias Borges</p>
                </div>
            </div>
        </div>

        <div class="topicos">
            <div id="titulo-contatos">
                <p><strong>Contatos</strong></p>
            </div>

            <div id="icon">
                <div>
                    <a href="https://www.facebook.com/"><img src="assets/images/Facebook-icon.png" alt="facebook"></a>
                </div>

                <div>
                    <a href="https://www.twitter.com/"><img src="assets/images/Twitter-icon.png" alt="twiter"></a>
                </div>

                <div>
                    <a href="https://www.github.com/"><img src="assets/images/Github-icon.png" alt="github"></a>
                </div>

                <div>
                    <a href="https://dribbble.com/"><img src="assets/images/Dribbble-icon.png" alt="?"></a>
                </div>

            </div>
        </div>

        <div class="topicos">
            <div class="titulo-topicos">
                <p><strong>Desenvolvido Por:</strong></p>
            </div>
            <div id="logo">
                <img src="assets/images/logo-oficial2.png" id="logo-rodape" alt="icone da fabrica">
            </div>
        </div>

    </div>

    <div id="copy">
        <p>Copyright © 2020 Fábrica de softwares ITP - IFSP - Todos os direitos reservados</p>
    </div>
</body>
</html>