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
    @include('includes.header')
    <main>
        <section id="@yield('section-id')" class="container my-5">
            @yield('content')
        </section>
    </main>
</body>
</html>
