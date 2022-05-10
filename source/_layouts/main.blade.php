<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <base href="https://ic.itp.ifsp.edu.br/fabsoftware">

    <link rel="icon" href="assets/images/logo-oficial.png">
    <meta name="description" content="{{ $page->description }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <link rel="stylesheet" href="{{ trim($page->baseUrl, '/') }}{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ trim($page->baseUrl, '/') }}{{ mix('js/main.js', 'assets/build') }}"></script>
    <title>Fábrica de Software</title>
</head>

<body>

    @include('_partials.header')
    
      <aside>
          <article>Fábrica de Software</article> <a>IFSP Itapetininga!!</a>
      </aside>
      
    @yield('body')

    @include('_partials.footer')

    </div>

</body>

</html>
