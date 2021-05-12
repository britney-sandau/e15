@extends('layouts/main')

@section('content')

{{-- <h1 dusk='login-heading'>Login</h1> --}}

<h1>User login</h1>

<p>Welcome back!</p>



<form method='POST' action='/login'>

    {{ csrf_field() }}

    <label for='username'>Username</label>
    <input id='username' type='username' name='username' value='{{ old('username') }}'>
    <br>
    <label for='password'>Password</label>
    <input id='password' type='password' name='password' value='{{ old('password') }}'>
    <br>
    <button type='submit'>Login</button>

</form>

@endsection
