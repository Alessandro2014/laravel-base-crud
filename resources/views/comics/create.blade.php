@extends('layouts.main')
@section('title', 'Comics')
@section('section-id', 'comics')

@section('content')
{{-- FORM PER INSERIRE NUOVO FUMETTO --}}
    <h1 class="text-center">Inserisci un nuovo fumetto</h1>
    <form action="{{ route('comics.store') }}" method="POST" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="col-md-6">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="col-6">
            <label for="sale_date" class="form-label">Uscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="col-6">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="col-md-4">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="col-md-8">
            <label for="thumb" class="form-label">Link immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="col-md-12">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        {{-- <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div> --}}
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="reset" class="btn btn-secondary">Cancella</button>

        </div>
    </form>
@endsection
