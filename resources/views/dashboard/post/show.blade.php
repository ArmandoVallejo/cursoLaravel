@extends('dashboard.master')
@section('content')

    <h2>Post: {{ $post->title }}</h2>

    <p><strong>Slug:</strong> {{ $post->slug }}</p>
    <p><strong>Content:</strong> {{ $post->content }}</p>
    <p><strong>Category:</strong> {{ $post->category->title }}</p>
    <p><strong>Description:</strong> {{ $post->description }}</p>
    <p><strong>Posted:</strong> {{ $post->posted }}</p>
    @if($post->image)
        <p><strong>Image:</strong></p>
        <img src="{{ asset('uploads/posts/' . $post->image) }}" alt="{{ $post->title }}" style="max-width: 300px;">
    @else
        <p><strong>Image:</strong> No image available</p>
    @endif

    <a href="{{ route('post.index') }}">Back to Posts</a>