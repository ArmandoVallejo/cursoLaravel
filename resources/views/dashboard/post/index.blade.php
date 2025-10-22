@extends('dashboard.master')

@section('content')

<a href="{{ route('post.create') }}">Crear un post</a>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Posted</th>
            <th>Category</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->posted }}</td>
                <td>{{ $post->category->title }}</td>
                <td>
                    <ul>
                        <li><a href="{{ route('post.edit', $post->id) }}">Edit</a></li>
                        <li><a href="{{ route('post.show', $post->id) }}">Show</a></li>
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}
@endsection