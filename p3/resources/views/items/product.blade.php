@extends('layouts/main')

@section('title')

{{$title}}

@endsection

@section('head')

<link href='/css/app.css' type='text/css' rel='stylesheet'>

@endsection

@section('content')
<h1>{{$title}}</h1>

<p>
    This page will list the details of the item available.
</p>

@endsection
