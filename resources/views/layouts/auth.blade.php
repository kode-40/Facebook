<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @stack('prepend-style')
    @stack('addon-style')
    @vite(['resources/js/app.js'])
</head>
<body  style="background-color: #f0f2f5;">
    @yield('content')
</body>
</html>