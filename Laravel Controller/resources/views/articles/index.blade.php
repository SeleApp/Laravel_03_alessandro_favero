@extends('layouts.blog')

@section('title', 'Articoli')

@section('content')
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="fw-bold">Tutti gli articoli</h1>
            <p class="text-muted">Esempio di elenco alimentato dal controller senza duplicare dati nelle rotte.</p>
        </div>
    </div>

    <div class="row g-4">
        @foreach ($articles as $article)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-subtitle mb-2 text-muted">{{ $article['subtitle'] }}</p>
                        <p class="card-text text-truncate">{{ $article['content'] }}</p>
                        <a href="{{ route('articles.show', ['id' => $article['id']]) }}" class="btn btn-primary mt-auto">Leggi</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
