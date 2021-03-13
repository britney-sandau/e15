@extends('layouts/main')

@section('title')
All books
@endsection

@section('content')

<ul>
    @foreach($books as $book)
    <li>{{ $book['title'] }} by {{ $book['author'] }}</li>
    @endforeach
</ul>

@endsection
