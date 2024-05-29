@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($article) ? 'Modifier l\'Article' }}</h1>
    <form action="{{ isset($article) ? route('articles.update', $article->id) : route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($article))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ isset($article) ? $article->title : '' }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ isset($article) ? $article->description : '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="author">Auteur</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ isset($article) ? $article->author : '' }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @if(isset($article) && $article->image_path)
                <img src="{{ asset('images/' . $article->image_path) }}" class="img-thumbnail mt-2" width="150">
            @endif
        </div>
        <div class="form-group">
            <label for="featured">À la une</label>
            <input type="checkbox" name="featured" id="featured">
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($article) ? 'Mettre à jour' : 'Créer' }}</button>
    </form>
</div>
@endsection
