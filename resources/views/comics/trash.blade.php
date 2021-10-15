@extends('layouts.main')
@section('title', 'Trash')
@section('section-id', 'comics-trash')

@section('content')
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
                {{-- INFO FUMETTO ELIMINATO --}}
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
                        {{-- RIPRISTINO FUMETTO ELIMINATO --}}
                        <form action="{{ route('comics.restore', $comic->id) }}" method="POST" class="d-inline eg-3">
                            @method('PATCH')
                            @csrf
                            <button type="submit" class="btn btn-success">Ripristina</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <h6 class="text-center">Nessun fumetto trovato</h6>
        @endforelse
    </div>
@endsection
