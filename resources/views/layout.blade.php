<!--Plantilla de lo que se va a repetir en todas las paginas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
</head>
<body>
    <nav>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li><a href="/contact">Contact</a></li>
    </nav>
    @yield('content')
</body>
</html>