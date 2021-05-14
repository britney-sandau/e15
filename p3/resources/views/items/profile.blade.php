@extends('layouts/main')

@section('title')

Curby

@endsection

@section('content')

<h1>Curby</h1>

<p>Hi {{Auth::user()->name}}
    <img src='{{asset('/storage/images/'.Auth::user()->profile_photo)}}' alt='Profile Photo'>
</p>
<p>
    Add a profile photo.
</p>

<div class='photo'>
    <form method='POST' action='/upload' enctype='multipart/form-data'>

        {{ csrf_field() }}

        <input type='file' name='image'>
        <input type='submit' value='Upload'>
    </form>

</div>

@endsection
