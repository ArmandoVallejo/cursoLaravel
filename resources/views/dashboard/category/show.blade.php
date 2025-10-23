@extends('dashboard.master')
@section('content')

    <h2>Post: {{ $post->title }}</h2>

    <p><strong>Slug:</strong> {{ $post->slug }}</p>

    <a href="{{ route('post.index') }}">Back to Categories</a>