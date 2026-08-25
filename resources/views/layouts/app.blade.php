<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} — {{ $profile['role'] }}</title>
    <meta name="description" content="{{ $profile['tagline'] }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-rose-50 via-white to-amber-50 text-stone-700 antialiased">
    <div id="scroll-progress" class="fixed inset-x-0 top-0 z-[60] h-1 bg-gradient-to-r from-rose-400 via-rose-300 to-amber-300"></div>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        window.addEventListener('load', function () {
            setTimeout(function () {
                if (!document.documentElement.classList.contains('js-ready')) {
                    document.querySelectorAll('[data-reveal]').forEach(function (el) {
                        el.classList.add('is-visible');
                    });
                }
            }, 700);
        });
    </script>
</body>
</html>