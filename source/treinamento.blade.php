@extends('_layouts.main')

@section('body')
<h1>Treinamento</h1>
<ul>
    @foreach ($treinamento as $treina)
        <li>
            <a href="{{ $treina->getURl() }}">{{ $treina->name }}</a>
        </li>
    @endforeach
</ul>

@endsection