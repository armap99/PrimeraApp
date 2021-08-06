<!--Plantilla de lo que se va a repetir en todas las paginas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../resources/css/app.css">
    <script src="../resources/js/app.js" defer></script><!-- defer es para que lo cargue hasta el final-->
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
