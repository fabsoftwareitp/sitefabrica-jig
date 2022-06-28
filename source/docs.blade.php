@extends('_layouts.main')

@section('body')
<h1>Projetos</h1>
<ul>
    @foreach ($docs as $doc)
        <li>
            <a href="{{ $doc->getURl() }}">{{ $doc->name }}</a>
        </li>
    @endforeach
</ul>

@endsection