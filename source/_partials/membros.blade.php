
<h1>Membros</h1>
<ul>
    @foreach ($membros as $membro)
        <li>
            <a href="{{ $membro->getURl() }}">{{ $membro->name }}</a>
        </li>
    @endforeach
</ul>