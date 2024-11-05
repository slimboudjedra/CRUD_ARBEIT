@extends('layout')

@section('title', 'Créer un Nouveau Post')

@section('content')
    <h1>Neuer beitrag erstellen</h1>
    
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Titel :</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Beschreibung :</label>
            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="post_creator">Ersteller des Posts (ID) :</label>
            <input type="number" class="form-control" id="post_creator" name="post_creator" required>
        </div>

        <button type="submit" class="btn btn-primary">Beitrag erstellen</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Abbrechen</a>
    </form>
@endsection
