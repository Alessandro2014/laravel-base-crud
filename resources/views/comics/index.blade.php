@extends('layouts.main')
@section('title', 'Comics')
@section('section-id', 'comics')

@section('content')
    {{-- FORM DI RICERCA --}}
    <div class="d-flex justify-content-around mb-5">
        <form method="GET" class="d-flex">
            <input class="form-control me-2" type="text" name="search" placeholder="Cerca un fumetto.."
                value="{{ $search }}" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form>
        {{-- BOTTONE CESTINO --}}
        <a href="{{ route('comics.trash') }}" class="btn btn-secondary p-2 ">Cestino</a>
    </div>

    {{-- CARDS CON FUMETTI --}}
    @if (session('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                </svg>
                Il fumetto {{ session('success') }} è stato eliminato!
            </div>
        </div>
    @endif
    <div class="row">
        @forelse ($comics as $comic)
            <div class="col-3 mb-4">
                <div class="card d-flex flex-wrap" style="width: 16rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top " alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Serie: {{ $comic->series }}</li>
                        <li class="list-group-item">Uscita: {{ $comic->sale_date }}</li>
                        <li class="list-group-item">Tipo: {{ $comic->type }}</li>
                        <li class="list-group-item">Prezzo: €{{ $comic->price }}</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info p-2">Des.</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning p-2">Modifica</a>
                        {{-- FORM PER LA CANCELLAZIONE DEL FUMETTO --}}
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                            class="d-inline delete-form" data-comic="{{ $comic->title }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <h6 class="text-center">Nessun fumetto trovato</h6>
        @endforelse
    </div>
@endsection

@section('scripts')
    <script>
        // RECUPERO LA CLASSE
        const deleteForm = document.querySelectorAll('.delete-form');
        // INTERCETTO IL SUBMIT
        deleteForm.forEach(form => {
            form.addEventListener('submit', function(event) {
                const name = form.getAttribute('data-comic');
                // BLOCCO L'EVENTO DI CANCELLAZIONE
                event.preventDefault();
                // ISTRUZIONE SUL COSA FARE
                const confirmEvent = confirm(`Sei sicuro di voler cancellare ${name}?`);
                if (confirmEvent) this.submit();
            });
        })
    </script>
@endsection
