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

    <h3>New Curby Finds</h3>

    @foreach($items as $item)

    <a class='item' href='/items/{{$item['slug']}}'>
        <h4>{{$item['username']}}</h4>
        <img class='image' src='{{ $item['image']}}'>
    </a>
    @endforeach

</div>

@endif

@endsection
