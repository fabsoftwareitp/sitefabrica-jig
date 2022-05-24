@extends('_layouts.main')

@section('body')
<header>

    <div id="header">
        <div id="link-home">
            <img  src="assets/images/logo-oficial.png" alt="logo fabsoftware">
            <a href="#"><h1>Fábrica de Software</h1></a> 
        </div>

        <nav>
            <a class="link-header" href="#">Blog</a>
            <a class="link-header" href="#">Membros</a>
            <a class="link-header" href="#">Projetos</a>
        </nav>
    </div>
    
    
</header>
<div class="links-home">
    @foreach ($membros as $membro)
        <a class="membros-links" href="{{ $membro->getURl() }}"><div id="link-membro">{{ $membro->name }}</div></a>
    @endforeach
</div>
@endsection
