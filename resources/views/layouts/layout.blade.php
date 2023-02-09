<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>American Truck / @yield('title')</title>
    <link rel="icon" href={{ asset('/images/logo.png') }}>
    <link rel="stylesheet" href={{ '/css/app.css' }}>
    <link rel="stylesheet" href={{ '/css/table.css' }}>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="inner-header">
                <div class="logo">
                    <a href="/"><img src={{ asset('/images/logo.png') }} alt="Euro Truck.png"></a>
                    <a href="/"><em>American Truck</em></a>
                </div>
                <div class="navbar">
                    <a class="@yield('home')" href="/">Home</a>
                    <a class="@yield('trucks')" href="/trucks">Trucks</a>
                    <a class="@yield('drivers')" href="/drivers">Drivers</a>
                </div>
            </div>
        </header>
        <main>
            @yield('main')
        </main>
        <footer>
            <div class="inner-footer">
                <h2 class="content">Copyright &copy; 2022 | Design by Roman Maxim</h2>
                <div class="footer-links">
                    <a href="https://www.facebook.com/maxim.roman.18" target="_blank"><h2><i class="fa-brands fa-facebook-f"></i></h2></a>
                    <a href="https://www.linkedin.com/in/maxim-roman-392888253/" target="_blank"><h2><i class="fa-brands fa-linkedin-in"></i></h2></a>
                    <a href="https://github.com/MaximRoman" target="_blank"><h2><i class="fa-brands fa-github"></i></h2></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://kit.fontawesome.com/736804efb5.js" crossorigin="anonymous"></script>
</body>
</html>