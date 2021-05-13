@extends('layouts/main')

@section('title')

Curby

@endsection

@section('content')

@if(Auth::user())
<h2>
    Hello {{ Auth::user()->name }}!
</h2>
@endif


<h1>Curby</h1>

<h3>One man's trash is another man's treasure.</h3>

@if(Auth::user())
<p>Explore the latest <a href='/items'>Curby finds here!</a></p>
<p>Do you have something that needs to be posted? <a href='/items/add'>Curb your item.</a></p>

@endif

@if(!Auth::user())
<p>Register to find what treasure awaits you!<a href='/register'> Sign-up today</a></p>
<p>Already a Curby member? <a href="/login"> Login Here</a></p>
@endif




@endsection
