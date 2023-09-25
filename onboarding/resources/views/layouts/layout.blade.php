<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>onboarding</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
        rel="stylesheet"/>
    <!-- styles -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>
<body class="antialiased">
    <div class="container bg-cover bg-white sm:flex font-sans bg-[url('{{asset('/img/fondo1.jpg')}}')]">
        @yield('content')
    </div>
@livewireScripts
</body>
</html>
