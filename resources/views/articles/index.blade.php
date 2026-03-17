@extends('layouts.blog')

@section('title', 'Tutti gli articoli')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold">Tutti gli articoli</h1>
            <p class="text-muted">La logica di caricamento vive nell'<code>ArticleController</code>, non nelle rotte.</p>
            <hr>
        </div>
    </div>

    <div class="row g-4">
        @foreach ($articles as $article)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $article['image'] }}"
                         class="card-img-top"
                         alt="{{ $article['title'] }}"
                         style="height:160px; object-fit:cover;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-secondary">{{ $article['category'] }}</span>
                            <small class="text-muted">&#128337; {{ $article['read_time'] }}</small>
                        </div>
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text text-muted small flex-grow-1">{{ $article['excerpt'] }}</p>
                        <a href="{{ route('articles.show', ['slug' => $article['slug']]) }}"
                           class="btn btn-primary mt-3">Leggi l'articolo</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
