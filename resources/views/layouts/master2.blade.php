<!doctype html>
<html lang="en">

<head>
    <title> @yield('title') </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/movies.css" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    {{-- @if (session('message'))            {{-- ispisivanje za flash poruku 06.10.2022 drugi deo --}}
    {{-- <div class="alert alert-success"> {{-- ukoliko 'message' postoji onda cemo izrenderovati neki div za zelenom porukom i unutar njega ispisujemo 'message' iz session-a --}}
    {{-- {{ session('message') }}
      </div>  
    @endif --}}

    <main class="container">
        @yield('content')
    </main>
</body>

</html>
