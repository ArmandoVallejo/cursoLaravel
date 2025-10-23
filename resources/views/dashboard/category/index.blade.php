@extends('dashboard.master')

@section('content')

<a href="{{ route('category.create') }}">Crear una categoria</a>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->title }}</td>
                <td>
                    <ul>
                        <li><a href="{{ route('category.edit', $cat) }}">Edit</a></li>
                        <li><a href="{{ route('category.show', $cat) }}">Show</a></li>
                        <li>
                            <form action="{{ route('category.destroy', $cat) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                        
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $categories->links() }}
@endsection