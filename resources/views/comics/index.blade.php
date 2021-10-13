@extends('layouts.main')
@section('title', 'Comics')
@section('section-id', 'comics')

@section('content')
    {{-- FORM DI RICERCA --}}
    <form method="GET" class="d-flex justify-content-center mb-5">
        <input class="form-control me-2" type="text" name="search" placeholder="Cerca un fumetto.."
            value="{{ $search }}" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
    </form>
        {{-- CARDS CON FUMETTI --}}
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card" style="width: 16rem;">
                @forelse ($comics as $comic)
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
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info p-2">Vai alla descrizione</a>
                    </div>
                @empty
                    <h6 class="text-center">Nessun fumetto trovato</h6>
                @endforelse
            </div>
        </div>
    </div>

@endsection
