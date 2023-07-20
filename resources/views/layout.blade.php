<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
</head>
<body>
    <h3>@yield('main-heading')</h3>
    <nav>
        <a href="#">HOME</a> | <a href="#">ABOUT</a> | <a href="#">CONTACT</a>
    </nav>
    <div>
        <!-- main content -->
        @yield('main-content')
    </div>

    <footer>
        <p>copyright &copy; 2023</p>
    </footer>
</body>
</html>