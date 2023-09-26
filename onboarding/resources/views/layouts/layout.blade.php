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

<div class="md:flex flex-wrap items-center min-h-screen py-6 mx-auto justify-center relative overflow-hidden sm:py-12">
    <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-6/10 leading-tight px-6 py-12 md:px-12">
        {{$slot}}
    </div>
    <div class="shrink-0 grow-0 basis-auto md:w-96 lg:flex lg:w-6/12 xl:w-6/10">
        <img src="{{asset('img/Tablet_login.svg')}}" alt="user profile"
             class="rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
        />
    </div>
</div>
@livewireScripts
</body>
</html>
