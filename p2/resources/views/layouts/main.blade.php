<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'Burger Bytes')</title>
    <meta charset='utf-8'>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
    <link href='/css/burger.css' rel='stylesheet'>

    @yield('head')
</head>
<body>
    <header>
        {{-- <a href='/'><img src='/images/burger.jpg' alt='burger and fries'></a> --}}
        <nav>
            <ul>
                <li><a href='/'>Burger Bytes</a></li>
                <li><a href='/order'>Order</a></li>
                <li><a href='/menu'>Menu</a></li>
                <li><a href='/contact'>Contact Us</a></li>
            </ul>
        </nav>

    </header>

    <section>
        @yield('content')
    </section>

</body>
</html>
