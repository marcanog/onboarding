<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>onboarding</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200&display=swap" rel="stylesheet">

    <!-- scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    <!-- styles -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles

</head>

<body class="mx-auto h-full font-['DM_Sans'] bg-white justify-center">
<header>
    @include('layouts.header')
</header>

<div id="main" class="row md:min-h-[700px]">
    {{ $slot }}
</div>

<footer>
    @include('layouts.pagination')
</footer>

@livewireScripts
</body>
</html>
