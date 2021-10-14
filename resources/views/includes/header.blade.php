@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css'
        integrity='sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA=='
        crossorigin='anonymous' />
@endsection
{{-- HEADER CON LINK DI NAVIGAZIONE --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand fs-4" href="#">Comics - DC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-between">
                <li class="nav-item">
                    {{-- TERNARIO PER INSERIRE CLASSE ACTIVE --}}
                    <a class="nav-link  {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('comics.index') ? 'active' : '' }}"
                        href="{{ route('comics.index') }}">Comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('comics.create') ? 'active' : '' }}"
                        href="{{ route('comics.create') }}">Inserisci Nuovo<i class="fas fa-pencil-alt"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
