<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'Tip Calculator')</title>
    <meta charset='utf-8'>

    <link href='/css/tipCalc.css' rel='stylesheet'>

    @yield('head')
</head>
<body>

    <div id='bg'>
        <a href='/'><img src='/images/table.jpg' alt='table of friends'></a>
    </div>

    <section>
        @yield('content')
    </section>

</body>
</html>
