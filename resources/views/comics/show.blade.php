@extends('layouts.main')

@section('title', 'Comic')

@section('section-id', 'comic-details')

@section('content')
    {{-- CARD SINGOLO FUMETTO --}}

    <div class="card mb-5">
        <div class="row">
            <div class="col-2">
                <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
            </div>
            <div class="col-10">
                <div class="card-body">
                    <h1 class="card-title">{{ $comic->title }}</h1>
                    <p class="card-text">{{ $comic->description }}</p>
                </div>
            </div>
        </div>
    </div>
    {{-- BOTTONI PER MODIFICARE O TORNARE INDIETRO --}}
    <div class="card-body text-center">
        <a href="{{ route('comics.index', $comic->id) }}" class="btn btn-secondary p-2">Indietro</a>
        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning p-2">Modifica</a>
    </div>



@endsection
