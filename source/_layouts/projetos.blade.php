@extends('_layouts.main')

@section('body')
<!-- essa div members ta centralizando e deixando o negocio bonitinho, por isso deixei aqui, mas a real é que ela pertence a parte de membros, a parte de projetos tera que ter sua própria.
obs: remover esse comentário quando for finalizar a task -->
<div id="members">
@yield('content')
</div>

@endsection