@extends('layout')

@section('title', 'Détails du Post')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p><strong>Beschreibung :</strong> {{ $post->description }}</p>
    <p><strong>Ersteller :</strong> {{ $post->post_creator }}</p>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Zurück zur Liste</a>
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Bearbeiten</a>
@endsection
