<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title> <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Styles -->
    <style>
    </style>
    <title>@yield('titel')</title>
</head>

<body>
    <header>
        <h1 class="align-middle">@yield('head_n')</h1>
    </header>
    <nav>
        <ul>
            <li><a href="{{ route('aaa') }}">จัดหมวดหมู่ห้องสมุด</a></li>
            <li><a href="จัดารห้องสมุด">จัดารห้องสมุด</a></li>
        </ul>
    </nav>
    <section class="d-flex justify-content-center text-center" >
        @yield('content')
    </section class="">



</body>

</html>
