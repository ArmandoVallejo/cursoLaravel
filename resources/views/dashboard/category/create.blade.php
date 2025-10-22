@extends('dashboard.master')

@section('content')

    @include('dashboard.fragment.errors-form')

    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title">

        <label for="">Slug</label>
        <input type="text" name="slug">

        <button type="submit">Send</button>
    </form>
@endsection
