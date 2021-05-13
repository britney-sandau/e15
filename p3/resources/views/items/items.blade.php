@extends('layouts/main')

@section('title')

Curby

@endsection

@section('content')

<h1>Curby</h1>

@if(count($items) == 0)
<h3>Nothing available at this time. Please check back later for more finds.</h3>
@else
<div id='newItems'>

    @foreach($items as $slug => $item)
    <h3>New Curby Finds</h3>
    <a class='item' href='/items/{{$slug}}'>
        <h4>{{$item['username']}}</h4>
        <img class='image' src='{{ $item['image']}}'>
    </a>
    @endforeach

    {{-- @foreach($items as $item)
           <ul class='newList'>

        <li>{{ $item['username']}} has {{ $item['category']}} available
    <br>
    {{$item['description']}}
    <br>
    {{$item['image']}}</li>
    @endforeach
    </ul>--}}


</div>
@endif

{{--

<div id='items'>
    @foreach($items as $item)
    <a class='item' href='/items/{{ $item->slug }}'>
<h3>{{ $item->category }}</h3>
<img class='cover' src='{{ $item->image }}'>
</a>
@endforeach
</div>
@endif --}}


@endsection
