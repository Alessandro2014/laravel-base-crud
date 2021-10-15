@extends('layouts.main')

@section('title', 'Comics')

@section('section-id', 'comics')

@section('content')
    {{-- FORM PER INSERIRE NUOVO FUMETTO --}}
    <h1 class="text-center mb-3">Inserisci un nuovo fumetto</h1>
    <form action="{{ route('comics.store') }}" method="POST" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title', $comic->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    Inserisci un titolo valido
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                value="{{ old('series', $comic->series) }}">
            @error('series')
                <div class="invalid-feedback">
                    Inserisci la serie
                </div>
            @enderror
        </div>
        <div class="col-6">
            <label for="sale_date" class="form-label">Uscita</label>
            <input type="text" class="form-control @error('date_sale') is-invalid @enderror" id="sale_date" name="sale_date"
                value="{{ old('sale_date', $comic->sale_date) }}">
            @error('date_sale')
                <div class="invalid-feedback">
                    Inserisci una data valida
                </div>
            @enderror
        </div>
        <div class="col-6">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                value="{{ old('type', $comic->type) }}">
            @error('type')
                <div class="invalid-feedback">
                    Inserisci il tipo
                </div>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}">
        </div>
        <div class="col-md-8">
            <label for="thumb" class="form-label">Link immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
        </div>
        <div class="col-md-12">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                rows="3" value="{{ old('description', $comic->description) }}"></textarea>
            @error('description')
                <div class="invalid-feedback">
                    Inserisci una descrizione di almeno 20 lettere
                </div>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="reset" class="btn btn-secondary">Cancella</button>

        </div>
    </form>
@endsection
