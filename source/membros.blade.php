@extends('_layouts.main')

@section('body')
<header>

    <div id="header">
        <div id="link-home">
            <img  src="assets/images/logo-oficial.png" alt="logo fabsoftware">
            <a href="#"><h1>Fábrica de Software</h1></a> 
        </div>

        <nav>
            <a href="#">Blog</a>
            <a href="#">Membros</a>
            <a href="#">Projetos</a>
        </nav>
    </div>
    
    
</header>
<div class="links-home">
    @foreach ($membros as $membro)
        <a class="membros-links" href="{{ $membro->getURl() }}">{{ $membro->name }}</a>
    @endforeach
</div>
@endsection
