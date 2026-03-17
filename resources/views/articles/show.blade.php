@extends('layouts.blog')

@section('title', $article['title'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <a href="{{ route('articles.index') }}" class="btn btn-link ps-0 mb-3">&larr; Torna all'elenco</a>

            {{-- Immagine di copertina --}}
            <img src="{{ $article['image'] }}"
                 alt="{{ $article['title'] }}"
                 class="img-fluid rounded mb-4 w-100"
                 style="max-height:380px; object-fit:cover;">

            {{-- Meta --}}
            <div class="d-flex gap-3 align-items-center mb-3">
                <span class="badge bg-secondary fs-6">{{ $article['category'] }}</span>
                <small class="text-muted">&#128337; {{ $article['read_time'] }} di lettura</small>
            </div>

            {{-- Titolo e contenuto --}}
            <h1 class="fw-bold">{{ $article['title'] }}</h1>
            <p class="lead text-muted">{{ $article['excerpt'] }}</p>
            <hr>
            <p class="fs-5">{{ $article['content'] }}</p>

            <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary mt-4">&larr; Tutti gli articoli</a>
        </div>
    </div>
@endsection
