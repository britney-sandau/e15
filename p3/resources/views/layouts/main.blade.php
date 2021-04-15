<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <link href='/css/app.css' type='text/css' rel='stylesheet'>
    @yield('head')
</head>
<body>

    {{-- Add image here if you have time. 
    <header>
        <a href='/'><img src='/images/curby_logo.png' id='logo' alt='Curby Logo'></a>
    </header> --}}

    <section>
        @yield('content')
    </section>

    <footer>
        <p>Got a question or need some assistance?</p>
        <p>Email {{ config('mail.askCurby') }}.</p>
    </footer>

</body>
</html>
