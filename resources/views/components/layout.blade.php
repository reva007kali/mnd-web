<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucwords(str_replace('.', ' ', Route::currentRouteName())) }} | Maritim Nusa Dewata</title>

    <link rel="shortcut icon" href="/img/logo.webp"size="42/32" type="image/x-icon">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="style.css">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="font-display antialiased overflow-x-hidden">
    {{-- navbar --}}
    <x-navbar></x-navbar>

    <!-- main -->
    <main>
        {{ $slot }}
    </main>



    <x-footer></x-footer>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script async>
        feather.replace();
    </script>
    <script src="js/script.js"></script>
</body>

</html>
