@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    <img src="{{ asset('images/' . $article->image_path) }}" class="img-fluid" alt="{{ $article->title }}">
    <p>{{ $article->description }}</p>
    <p><small class="text-muted">Créé par {{ $article->author }} le {{ $article->created_at->format('d/m/Y') }}</small></p>
    <a href="{{ route('articles.home') }}" class="btn btn-primary">Retour</a>
</div>
@endsection
