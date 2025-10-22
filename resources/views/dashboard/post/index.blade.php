@extends('dashboard.master')

@section('content')
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Posted</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->posted }}</td>
                <td>{{ $post->category->title }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection