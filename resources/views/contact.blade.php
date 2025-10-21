@extends('master')

@section('content')
<h1>Contact 1</h1>
    <p>{{ $name }}</p>

    @if ($name != 'Juan')
        <p>Tu nombre no es Juan</p>
    @else
        <p>Hola Juan!</p>
    @endif

    <ul>
        @foreach ([1,2,3,4,5] as $item)
            <li>Item {{ $item }}</li>
        @endforeach
    </ul>
@endsection