<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <link rel="icon" href="assets/images/logo-oficial.png">
    <meta name="description" content="{{ $page->description }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <link rel="stylesheet" href="{{ trim($page->baseUrl, '/') }}{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ trim($page->baseUrl, '/') }}{{ mix('js/main.js', 'assets/build') }}"></script>
    <title>Fábrica de Software</title>
</head>

<body>
    <div class="container">
        <navbar>
            <ul>
                <li>Notícias</li>
                <li>Projetos</li>
                <li>Início</li>
                <li>Sobre</li>
                <li>Contato</li>
            </ul>
        </navbar>
        <div class="bloco">
            <a href="https://github.com/fabsoftwareitp/s"><img src="assets/images/git-logo4.svg" id="git-logo"></a>


            <aside>
                <article>Fábrica de Software</article> <a>IFSP Itapetininga</a>
            </aside>

            <img id="logo-bloco" src="assets/images/logo-oficial.png">
        </div>

        <div id="linha-laranja"> <img src="assets/images/left.png"> <img src="assets/images/right.png"> </div>



    </div>
    <div class="container">

        <h1>Sobre o projeto</h1>
        <p>A Fábrica de Software é uma iniciativa liderada pelo Prof. Me. Danilo Camargo Bueno, e têm como objetivo
            o desenvolvimento, a prática e a evolução nos âmbitos da criação de software. Neste sentido, os
            participantes do projeto podem ter, dentre outras, as seguintes oportunidades:</p>

        <article>

            <div class="oportunidade">
                <div></div>
                <h4>Conhecer diferentes
                    tecnologias</h4>
            </div>
            <div class="oportunidade">
                <div></div>
                <h4>Enfrentar desafios reais</h4>
            </div>

            <div class="oportunidade">
                <div></div>
                <h4>Trabalhar em equipe</h4>
            </div>

        </article>

        <h1>Depoimentos</h1>

        <section id="depoimentos">
            <div>
                <iframe src="https://www.youtube.com/embed/B1bys3rAuL8" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe> <strong>Rafael Damiam</strong></div>

            <div>
                <iframe src="https://www.youtube.com/embed/sDcW1keRIDs" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <strong>Vinicius Zevarex</strong>

            </div>
            <div>
                <iframe src="https://www.youtube.com/embed/D054k8JNOm4" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

                <strong>João Moraiz</strong></div>
            <div>
                <iframe src="https://www.youtube.com/embed/aw3LTiobEYs" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <strong>Lucas Cavalherie</strong>


            </div>
        </section>


        <div id="noticias">

            <h1>Ultimas Notícias</h1>

            <div></div>

            <a href="https://ic.itp.ifsp.edu.br/fabsoftware/noticias"><button>Ver mais...</button></a>



        </div>

        <footer>

            <div>
                <aside>a </aside>
                <aside> a</aside>
                <aside><img src="assets/images/logo-oficial.png"></aside>
            </div>
            <article>Copyright © 2020 Fábrica de softwares ITP - IFSP - Todos os direitos reservados</article>

        </footer>

    </div>

</body>

</html>