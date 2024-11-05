@extends('layout')

@section('title', 'Modifier le Post')

@section('content')
    <h1>Post bearbeiten</h1>
    
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titel :</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Beschreibung :</label>
            <textarea class="form-control" id="description" name="description" rows="5" required>{{ $post->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="post_creator">Ersteller des Posts (ID) :</label>
            <input type="number" class="form-control" id="post_creator" name="post_creator" value="{{ $post->post_creator }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Post aktualisieren</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Abbrechen</a>
    </form>
@endsection
