<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/tw.css" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body>
    <div class="text-gray-300">
        <nav class="bg-gray-200 text-gray-900 shadow-xs px-4 py-2 flex items-center justify-between">
            <div class="flex items-center md:ml-4">Logo goes here</div>
            <div class="flex items-center md:mr-4">Avatar goes here</div>
        </nav>
    </div>
    @yield ('content')

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>

</body>

</html>