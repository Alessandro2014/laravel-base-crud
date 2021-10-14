@extends('layouts.main')

@section('title', 'Modifica')

@section('section-id', 'edit-comic')

@section('content')
    {{-- FORM PER MODIFICARE FUMETTO --}}
    <h1 class="text-center mb-3">Modifica fumetto</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="row g-3">
        @method('PATCH')
        @csrf
        <div class="col-md-6">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>
        <div class="col-md-6">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>
        <div class="col-6">
            <label for="sale_date" class="form-label">Uscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="col-6">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
        </div>
        <div class="col-md-4">
            <label for="price" class="form-label">Prezzo €</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>
        <div class="col-md-8">
            <label for="thumb" class="form-label">Link immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="col-md-12">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3"
                value="">{{ $comic->description }}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Modifica</button>
        </div>
    </form>
@endsection
