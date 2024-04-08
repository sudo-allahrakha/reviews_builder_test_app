<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Box Icons  --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Custom theme --}}
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">


    {{-- Swiper Slider --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- Animation --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>

    <!-- Header content -->
    @include('layouts.header')
    <!-- main section -->

    <main>
        @yield('content')
    </main>
    <!-- Footer content -->
    @include('layouts.footer')

    <!-- Include any necessary JavaScript files -->

    <script>
        const elementToSetAttribute = document.querySelector('html');
        elementToSetAttribute.setAttribute('data-bs-theme', localStorage.getItem('theme'));

        let btnToggleTheme = document.getElementById('toggleTheme');
        btnToggleTheme.addEventListener('click', function() {
            const isDarkMode = localStorage.getItem('theme') === 'dark';
            if (isDarkMode) {
                elementToSetAttribute.setAttribute('data-bs-theme', 'light');
                btnToggleTheme.classList.remove('bi-moon-stars-fill');
                btnToggleTheme.classList.add('bi-sun-fill');
                localStorage.setItem('theme', 'light');
            } else {
                elementToSetAttribute.setAttribute('data-bs-theme', 'dark');
                btnToggleTheme.classList.remove('bi-sun-fill');
                btnToggleTheme.classList.add('bi-moon-stars-fill');
                localStorage.setItem('theme', 'dark');
            }

        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>

</body>

</html>
