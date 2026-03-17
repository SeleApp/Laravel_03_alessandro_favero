@extends('layouts.blog')

@section('title', 'Homepage')

@section('content')
    {{-- Hero --}}
    <div class="row justify-content-center text-center py-5">
        <div class="col-lg-8">
            <h1 class="display-5 fw-bold">Il Blog della Griglia</h1>
            <p class="lead mt-3">Tecniche, ricette e consigli per cucinare carne alla perfezione.</p>
            <a href="{{ route('articles.index') }}" class="btn btn-primary btn-lg mt-3">Sfoglia tutti gli articoli</a>
        </div>
    </div>

    {{-- Articoli in evidenza --}}
    <div class="row mb-3">
        <div class="col-12">
            <h2 class="fw-semibold">In evidenza</h2>
            <hr>
        </div>
    </div>

    <div class="row g-4">
        @foreach ($featured as $article)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $article['image'] }}"
                         class="card-img-top"
                         alt="{{ $article['title'] }}"
                         style="height:180px; object-fit:cover;">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-secondary mb-2 align-self-start">{{ $article['category'] }}</span>
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text text-muted small">{{ $article['excerpt'] }}</p>
                        <a href="{{ route('articles.show', ['slug' => $article['slug']]) }}"
                           class="btn btn-outline-primary mt-auto">Leggi &rarr;</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
