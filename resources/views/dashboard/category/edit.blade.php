
@extends('dashboard.master')

@section('content')

    @include('dashboard.fragment.errors-form')
    <h2>Editar Categoria: {{ $category->title }}</h2>

    <form action="{{ route('category.update', $category->id) }}" method="post">
        @method('PATCH')
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" value="{{old('title',$category->title) }}">

        <label for="">Slug</label>
        <input type="text" name="slug" value="{{ old('slug', $category->slug) }}">

        <button type="submit">Send</button>
    </form>

@endsection