@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier l'Article</h1>
    <form action="{{ route($article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $article->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" required>{{ $article->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="author">Auteur</label>
            <input type="text" name="author" class="form-control" id="author" value="{{ $article->author }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control-file" id="image">
        </div>
        <div class="form-group">
            <label for="featured">À la une</label>
            <input type="checkbox" name="featured" id="featured" {{ $article->featured ? 'checked' : '' }}>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
