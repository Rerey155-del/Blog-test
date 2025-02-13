<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 h-screen text-default ">
    <x-navbar/>
    <x-header>{{ $title }}</x-header>
    <h1 class="text-3xl font-bold text-red-500">Hello, ini adalah halaman about</h1>
</body>
</html>