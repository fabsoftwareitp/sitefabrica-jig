@extends('_layouts.main')

@section('body')

<div class="links-home">
    @foreach ($membros as $membro)
        <div class="membro-home">
            <img id="imagem-membro" src="{{ $membro->img }}" alt="Imagem {{ $membro->name }}">
            <a class="membros-links" href="{{ $membro->getURl() }}"><div id="link-membro">{{ $membro->name }}</div></a>
        </div>
    @endforeach
</div>
@endsection
