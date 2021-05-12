@extends('layouts/main')

@section('title')

Curby

@endsection

@section('content')

<h1>Curby</h1>

<p>
    This is where users will sign-up.
</p>

<form method='POST' action='/signup'>
    {{ csrf_field() }}

    <label for='firstName'>First Name </label>
    <input dusk='firstName' id='firstName' type='firstName' name='firstName' value='{{ old('firstName') }}'>


    <br>
    <label for='lastName'>Last Name </label>
    <input dusk='lastName' id='lastName' type='lastName' name='lastName' value='{{ old('lastName') }}'>


    <br>
    <label for='username'>Username </label>
    <input id='username' type='text' name='username' value='{{ old('username') }}'>
    <br>
    <label for='email'>E-Mail Address </label>
    <input dusk='email-input' id='email' type='email' name='email' value='{{ old('email') }}'>
    <br>
    <label for='password'>Password (min: 8) </label>
    <input dusk='password-input' id='password' type='password' name='password' value='{{ old('password') }}'>


    <br>
    <label for='password2'>Confirm Password </label>
    <input dusk='password2' id='password2' type='password2' name='password2' value='{{ old('password2') }}'>


    <br>
    <button dusk='register-button' type='submit' class='btn btn-primary'>Register</button>
</form>


@endsection
