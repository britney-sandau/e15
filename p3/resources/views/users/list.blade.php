@extends('layouts/main')

@section('title')

Curby

@endsection

@section('content')

<h1>Curby</h1>

<p>
    User's list will be displayed here.
</p>

{{-- @if(count($items) == 0)
<p>Nothing available at this time. Please check back later for more finds.</p>
@else
<div id='newBooks'>
    <h2>New Books</h2>
    <ul class='clean-list'>
        @foreach($newBooks as $book)
        <li><a href='/books/{{ $book->slug }}'>{{ $book->title }}</a></li>
@endforeach
</ul>
</div>

<div id='books' dusk='books'>
    @foreach($books as $book)
    <a class='book' href='/books/{{ $book->slug }}'>
        <h3>{{ $book->title }}</h3>
        <img class='cover' src='{{ $book->cover_url }}'>
    </a>
    @endforeach
</div>
@endif --}}



@endsection
