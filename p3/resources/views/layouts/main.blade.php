<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'Curby')</title>
    <meta charset='utf-8'>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
    <link href='/css/app.css' type='text/css' rel='stylesheet'>
    @yield('head')
</head>
<body>

    @if(session('alert'))
    <div class='alert'>
        {{session('alert')}}
    </div>
    @endif


    <div class="content">

        <header>

            <nav class="nav">

                <ul class="list">
                    <li class="navLi"><a href='/'>Curby</a></li>

                    @if(Auth::user())
                    <li class="navLi"><a href='/items'>Available Items</a></li>
                    <li class="navLi"><a href='/items/add'>Post an Item</a></li>
                    <li class="navLi"><a href='/auth/list'>My Listings</a></li>
                    @endif

                    <li class="navLi"><a href='/help'>Curby Assistance</a></li>

                    <li>


                        @if(!Auth::user())
                        <a href=/login>Login</a>
                        @else
                        <form method='POST' id='logout' action='/logout'>
                            {{ csrf_field() }}
                            <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                        </form>
                        @endif
                    </li>
                </ul>
            </nav>


        </header>

        <section class="content">
            @yield('content')
        </section>

    </div>

    <footer class="content">
        <p>Got a question or need some assistance?</p>
        <p>Email {{ config('mail.askCurby') }}.</p>
    </footer>

</body>
</html>
