<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + Tailwind</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 h-screen">
    <x-navbar></x-navbar>
    <x-header>{{ $title }}</x-header>

    <h1 class="text-3xl font-bold text-red-500">Hello, ini adalah halaman home, perkenalkan nama saya {{ $nama }}
    </h1>
    {{-- <img src="img/kopi.svg" alt=""> --}}
    <br>
    
</body>

</html>
