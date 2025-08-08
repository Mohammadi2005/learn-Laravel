<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>
<div class="container">

    @include("parts.nav")
    @yield('main')
    @include("parts.footer")
</div>

</body>
</html>
