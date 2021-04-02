<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'Burger Bytes')</title>
    <meta charset='utf-8'>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <img src='/images/burger.jpg' alt='burger and fries' width='600'>

    @yield('head')
</head>

<body style='padding: 50px'>

    <nav>
        <ul>
            <li><a href='/'>Burger Bytes</a></li>
            <li><a href='/menu'>Menu</a></li>
            <li><a href='/contact'>Contact Us</a></li>
        </ul>
    </nav>

    <section>
        @yield('content')
    </section>

</body>

</html>
