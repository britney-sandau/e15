@extends('layouts/main')

@section('title')

Curby

@endsection

@section('content')

<h1>Curby</h1>

<h2>This item will be removed.</h2>

<p>Do you want to proceed {{ $item->username }}?</p>

<form method='POST' action='/items/{{ $item->slug }}'>
    {{ method_field('delete') }}
    {{ csrf_field() }}
    <button type='submit' class='delButton'>Yes</button>
    <button type='submit' class='keepButton'> <a href='/items/{{ $item->slug }}'>No</a></button>
</form>

@endsection
