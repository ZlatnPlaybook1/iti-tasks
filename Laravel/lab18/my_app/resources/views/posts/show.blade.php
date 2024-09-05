@extends('layout.app')

@section('title') Show @endsection

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Post info
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            @if ($post->image)
    <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid" style="max-width: 300px; height: auto;">
@else
    <p>No Image Available</p>
@endif

        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            Post Creator info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{$post->user->name}}</h5>
            <p class="card-text">Email: {{$post->user->email}}</p>
            <p class="card-text">Created At: {{$post->user->created_at}}</p>
        </div>
    </div>
@endsection
