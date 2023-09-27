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
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&display=swap" rel="stylesheet">

    <!-- styles -->
    @vite('resources/css/app.css')
    @livewireStyles

</head>

<body class="container mx-auto h-full font-['Inclusive_Sans'] bg-white antialiased bg-cover bg-center bg-no-repeat justify-center bg-[url('/img/fondo1.jpg')]">

{{ $slot }}

@livewireScripts
</body>
</html>
