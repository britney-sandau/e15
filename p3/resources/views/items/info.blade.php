@extends('layouts/main')

@section('title')
Curby
@endsection

@section('content')

<h1>Curby</h1>

@if(!$item)
Item not available. Be sure to check back later for more <a href='/items'>Curby finds.</a>

@else

<p><b>User: </b>{{$item['username']}} has Curbed <b>{{$item['category']}}.</b></p>
<p class='description'><b>Item Description: </b> {{ $item['description'] }} </p>
<img src='{{$item['image']}}' alt='Photo posted by {{$item['category']}}'>

@endif

<button type='submit' id='delButton' class='delButton'> <a href='/items/{{ $item->slug }}/delete'>Delete Post</a></button>
<button type='submit' class='editButton'> <a href='/items/{{ $item->slug }}/edit'>Edit Post</a></button>

@endsection
