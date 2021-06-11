@extends('_layouts.main')

@section('body')
<div class="p-8">
    <h1 class="text-3xl font-bold">Hello world!</h1>
</div>

<ul>
@foreach ($posts as $post)
    <li>
        <a href="{{ $post->getURl() }}">{{ $post->title }}</a>
    </li>
@endforeach
</ul>

<h2>Membros</h2>
<ul>
    @foreach ($membros as $membro)
        <li>
            <a href="{{ $membro->getURl() }}">{{ $membro->name }}</a>
        </li>
    @endforeach
</ul>

<h2>Projetos</h2>
<ul>
    @foreach ($projetos as $projeto)
        <li>
            <a href="{{ $projeto->getURl() }}">{{ $projeto->name }}</a>
        </li>
    @endforeach
</ul>

@endsection
