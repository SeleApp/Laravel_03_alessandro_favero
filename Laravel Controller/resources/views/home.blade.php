@extends('layouts.blog')

@section('title', 'Homepage')

@section('content')
    <div class="row justify-content-center text-center py-5">
        <div class="col-lg-8">
            <h1 class="display-5 fw-bold">Benvenuto nel piccolo blog Laravel</h1>
            <p class="lead mt-3">Routing pulito, controller leggeri e viste Blade ordinate: ecco una base pronta per sperimentare.</p>
            <div class="d-flex gap-3 justify-content-center mt-4">
                <a href="{{ route('articles.index') }}" class="btn btn-primary">Vai agli articoli</a>
                <a href="{{ route('articles.show', ['id' => 1]) }}" class="btn btn-outline-primary">Leggi il primo articolo</a>
            </div>
        </div>
    </div>
@endsection
