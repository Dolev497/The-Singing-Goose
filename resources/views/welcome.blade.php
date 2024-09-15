<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
        rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,700;1,700&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<x-backboard>


   <div class="mx-auto mt-24">
    <x-dragform></x-dragform>
   </div>
    <div class="mt-40 flex flex-row">
        <div class="container relative">
            <img src="img/img.png" alt="" class="size-52 w-max">
            <pre class="fixed text-left" style="top:220px; left:830px ">Welcome to </pre>
            <pre class="fixed text-left" style="top:240px; left:830px ">Goose Vocal Coach! </pre>
        </div>
        <img src="img/IMG2.png" alt="">
    </div>


</x-backboard>

</html>
