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
            <input type="text" class="form-control is-invalid" id="title" name="title">
            {{-- @error
            <div id="validationServer03Feedback" class="invalid-feedback">
                Inserisci il titolo
            </div>
            @enderror --}}
        </div>
        <div class="col-md-6">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control is-invalid" id="series" name="series">
            {{-- @error
            <div id="validationServer03Feedback" class="invalid-feedback">
                Inserisci il la serie
            </div>
            @enderror --}}
        </div>
        <div class="col-6">
            <label for="sale_date" class="form-label">Uscita</label>
            <input type="text" class="form-control is-invalid" id="sale_date" name="sale_date">
            {{-- @error
            <div id="validationServer03Feedback" class="invalid-feedback">
                Inserisci il la serie
            </div>
            @enderror --}}
        </div>
        <div class="col-6">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control is-invalid" id="type" name="type">
            {{-- @error
            <div id="validationServer03Feedback" class="invalid-feedback">
                Inserisci il tipo
            </div>
            @enderror --}}
        </div>
        <div class="col-md-4">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control is-invalid" id="price" name="price">
            {{-- @error
            <div id="validationServer03Feedback" class="invalid-feedback">
                Inserisci il prezzo
            </div>
            @enderror --}}
        </div>
        <div class="col-md-8">
            <label for="thumb" class="form-label">Link immagine</label>
            <input type="text" class="form-control is-invalid" id="thumb" name="thumb">
            {{-- @error
            <div id="validationServer03Feedback" class="invalid-feedback">
                Inserisci il link dell'immagine
            </div>
            @enderror --}}
        </div>
        <div class="col-md-12">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control is-invalid" id="description" name="description" rows="3"></textarea>
            {{-- @error
            <div id="validationServer03Feedback" class="invalid-feedback">
                Inserisci la descrizione
            </div>
            @enderror --}}
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="reset" class="btn btn-secondary">Cancella</button>

        </div>
    </form>
@endsection
