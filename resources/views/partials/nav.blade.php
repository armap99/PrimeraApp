<nav class="navbar bg-white shadow-sm">

    <ul class="nav">
        <li class="nav-item  {{setActive('home')}}"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item {{setActive('about')}}"><a class="nav-link" href="{{ route('about') }}">About</a></li>
        <li class="nav-item {{setActive('portfolio')}}"><a class="nav-link" href="{{ route('portfolio.index') }}">Portfolio</a></li>
        <li class="nav-item {{setActive('contact')}}"><a href="{{ route('contact') }}">Contact</a></li>
    </ul>

</nav>
