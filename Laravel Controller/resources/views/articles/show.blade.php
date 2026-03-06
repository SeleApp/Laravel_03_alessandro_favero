@extends('layouts.blog')

@section('title', $article['title'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <a href="{{ route('articles.index') }}" class="btn btn-link ps-0 mb-3">&larr; Torna all'elenco</a>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title fw-bold">{{ $article['title'] }}</h1>
                    <p class="card-subtitle text-muted mb-3">{{ $article['subtitle'] }}</p>
                    <p class="card-text">{{ $article['content'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
