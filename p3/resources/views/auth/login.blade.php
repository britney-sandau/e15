@extends('layouts/main')

@section('content')

<h1>User login</h1>

<h2>Welcome back!</h2>

Want to join Curby? <a href='/register'>Sign-up here.</a>

<form method='POST' action='/login'>

    {{ csrf_field() }}

    <label for='email'>E-Mail Address</label>
    <input id='email' type='email' name='email' value='{{ old('email') }}'>
    <br>



    <label for='password'>Password</label>
    <input id='password' type='password' name='password'>
    <br>



    <label>
        <input type='checkbox' name='remember' {{ old('remember') ? 'checked' : '' }}> Remember Me
    </label>
    <br>


    <button type='submit' class='loginButton'>Login</button>

    </a>

</form>

@endsection
