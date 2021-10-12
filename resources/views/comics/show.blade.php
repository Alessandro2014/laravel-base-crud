@extends('layouts.main')

@section('title', 'Comic')

@section('section-id', 'comic-details')

@section('content')
    {{-- CARD SINGOLO FUMETTO --}}

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-4">
                <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h1 class="card-title">{{ $comic->title }}</h1>
                    <p class="card-text">{{ $comic->description }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
