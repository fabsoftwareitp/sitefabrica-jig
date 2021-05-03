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

@endsection
