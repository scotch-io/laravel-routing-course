<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Routing App</title>

    <style>
        li.active   {
            background: red;
            color: #FFF;
            border-radius: 3px;
        }
    </style>
</head>
<body>

    <?php dd(Request::url(), Request::segment(1), Request::segment(2)) ?>

    <header>
        <nav>
            <ul>
                <li class="{{ (Request::segment(1) == '') ? 'active' : '' }}">
                    <a href="/">Home</a>
                </li>
                <li class="{{ (Request::segment(1) == 'about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li class="{{ (Request::segment(1) == 'contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')
    
</body>
</html>