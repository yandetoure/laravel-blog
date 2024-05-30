@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-12">Ajouter un Article</a>
    
    <h2 class="titre text-center">Tous les Articles</h2>
    <div class="row">
        @foreach( $yandeh as $article )
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="img" src="{{ $article->image_path }}" class="card-img-top" alt="{{ $article->title }}" height="300">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $article->title }}</h5>
                        <p class="card-text"><small class="text-muted">Créé par {{ $article->author }} le {{ $article->created_at->format('d/m/Y') }}</small></p>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">Afficher</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
