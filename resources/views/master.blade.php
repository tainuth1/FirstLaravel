<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/contact.css">
    <script src="https://kit.fontawesome.com/2c9290e2d0.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/logoweb.png">
    <title>@yield('title')</title>
</head>
<body>
    <header class="head-page">
        <nav class="navigation container-width">
            <div class="logo">
                
                <img src="images/logo-color.webp" alt="logo reancode">
            </div>
            <span class="icon-toggler"><i class="fa-solid fa-bars fa-3x"></i></span>
            <ul class="menu-list">
                <li class="list"><a class="{{ Request::path() == '/' ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                <li class="list"><a class="{{ Request::path() == 'course' ? 'active' : '' }}" href="{{ url('/course') }}">Couses</a></li>
                <li class="list"><a class="{{ Request::path() == 'about' ? 'active' : '' }}" href="{{ url('/about') }}">About</a></li>
                <li class="list"><a class="{{ Request::path() == 'contact' ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')
    {{-- @include('home') --}}

    <footer class="footer">
        <div class="grid-1x3 container-width">
            <ul class="footer-list">
                <li class="footer-link"><a href="#">Reancode Information</a></li>
                <li class="footer-link"><a href="#">Teach Here</a></li>
                <li class="footer-link"><a href="#">Get the app</a></li>
                <li class="footer-link"><a href="#">About</a></li>
                <li class="footer-link"><a href="#">Contact us</a></li>
            </ul>
            <ul class="footer-list">
                <li class="footer-link"><a href="#">Career</a></li>
                <li class="footer-link"><a href="#">Blog</a></li>
                <li class="footer-link"><a href="#">Help and support</a></li>
                <li class="footer-link"><a href="#">Terms of use</a></li>
                <li class="footer-link"><a href="#">Privacy Polocy</a></li>
            </ul>
            <span class="copyright">&copy; reancode.com</span>
        </div>
    </footer>

</body>
</html>
<script>
    const menuToggler = document.querySelector(".icon-toggler");
    const navList = document.querySelector(".menu-list");

    menuToggler.addEventListener("click", ()=>{
        navList.classList.toggle("show");
    });
</script>