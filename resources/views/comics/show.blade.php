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



@endsection
