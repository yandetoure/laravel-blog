@extends('layouts.app')

@section('content')
<div class="container">
    <div class=""> 

        <div class="col">



    </div>
</div>


<div class="container">
    <div class="">
        <div class="col-md-12">
            <div class="card row jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <img class="img" src="{{ $article->image_path }}" class="card-img-top" alt="{{ $article->title }}" height="600" width="950">

            <div class="card-body">
        <p><small class="text-muted">Créé par {{ $article->author }} le {{ $article->created_at->format('d/m/Y') }}</small></p>
        <h1 class="title text-center">{{ $article->title }}</h1></div>
    <p>{{ $article->description }}</p>
    <a href="{{ route('articles.index') }}" class="btn btn-primary">Retour</a>
        </div>

        </div>
        </div>
    </div>
</div>
@endsection
