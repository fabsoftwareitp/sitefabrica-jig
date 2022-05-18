@extends('_layouts.main')

@section('body')

<div class="container">
        
        <div class="bloco bg">
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


<h1>Posts</h1>
<ul>
@foreach ($posts as $post)
    <li>
        <a href="{{ $post->getURl() }}">{{ $post->title }}</a>
    </li>
@endforeach
</ul>

<h1>Membros</h1>

<div class="links-home">
    @foreach ($membros as $membro)
        @if ($membro->status == "ativo")
            <a class="membros-links" href="{{ $membro->getURl() }}">{{ $membro->name }}</a>
        @endif
    @endforeach
</div>



<h1>Projetos</h1>

<div class="links-home">
    @foreach ($projetos as $projeto)
            <a class="projetos-links" href="{{ $projeto->getURl() }}">{{ $projeto->name }}</a>
    @endforeach
</div>
    

@endsection
