<!DOCTYPE html>
<html lang="en" class="smooth-scroll">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwindcss --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>SSI - @yield('title')</title>
</head>

<body>

    <main>
        @yield('content')

    </main>

</body>

</html>
