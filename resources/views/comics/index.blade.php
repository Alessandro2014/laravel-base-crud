@extends('layouts.main')
@section('title', 'Comics')
@section('section-id', 'comics')

@section('content')

    <div class="card" style="width: 18rem;">
        @forelse ($comics as $comic)
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Serie: {{ $comic->series }}</li>
            <li class="list-group-item">Uscita: {{ $comic->sale_date }}</li>
            <li class="list-group-item">Tipo: {{ $comic->type }}</li>
            <li class="list-group-item">Prezzo: €{{ $comic->price }}</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Vai alla descrizione</a>
        </div>
        @empty
        <h6 class="text-center">Nessun fumetto trovato</h6>
        @endforelse
    </div>

@endsection
