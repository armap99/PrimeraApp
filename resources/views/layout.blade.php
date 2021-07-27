<!--Plantilla de lo que se va a repetir en todas las paginas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <style>
        .active a{
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partials/nav')
    @yield('content')
</body>
</html>