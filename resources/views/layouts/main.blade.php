<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ '/css/app.css' }}">
    <title>Comics - @yield('title')</title>
    @yield('cdns')
</head>

<body>
    {{-- HEADER --}}
    @include('includes.header')
    <main>
        {{-- CONTENUTO --}}
        <section id="@yield('section-id')" class="container my-3">
            @yield('content')
        </section>
    </main>
    {{-- SCRIPTS --}}
    @yield('scripts')
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
