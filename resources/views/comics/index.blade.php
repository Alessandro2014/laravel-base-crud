@extends('layouts.main')
@section('title', 'Comics')
@section('section-id', 'comics')

@section('content')
    {{-- FORM DI RICERCA --}}
    <form method="GET" class="d-flex mb-5">
        <input class="form-control me-2" type="text" name="search" placeholder="Cerca un fumetto.."
            value="{{ $search }}" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
    </form>
    {{-- CARDS CON FUMETTI --}}
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
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info p-2">Descrizione</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning p-2">Modifica</a>
                        {{-- FORM PER LA CANCELLAZIONE DEL FUMETTO --}}
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
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
