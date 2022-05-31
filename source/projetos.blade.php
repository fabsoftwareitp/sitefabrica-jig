@extends('_layouts.main')

@section('body')

<div class="links-home">
    @foreach ($projetos as $projeto)
        <div class="projeto-home">
            <img id="imagem-projeto" src="{{ $projeto->img }}" alt="Imagem {{ $projeto->name }}">
            <a class="projetos-links" href="{{ $projeto->getURl() }}"><div id="link-membro">{{ $projeto->name }}</div></a>
        </div>
            
    @endforeach
</div>
@endsection
