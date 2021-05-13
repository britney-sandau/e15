@extends('layouts/main')

@section('title')
Curby
@endsection

@section('content')

<h1>Curby</h1>

@if(!$item)
Item not available. Be sure to check back later for more <a href='/items'>Curby finds.</a>

@else

<p><b>User: </b>{{$item['username']}} has Curbed {{$item['category']}} items</p>
<p>{{$item['category']}}</p>
<p class='description'><b>Item Description: </b> {{ $item['description'] }} </p>
<img src='{{$item['image']}}' alt='Photo posted by {{$item['category']}}'>

@endif


@endsection
