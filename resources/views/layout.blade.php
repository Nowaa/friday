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
    <div class="text-gray-300" x-data="{ open: false }">  
        <nav class="bg-gray-200 text-gray-900 shadow-xs px-4 py-2 flex items-center justify-between">
            <div class="flex items-center md:ml-4">Logo goes here</div>                   
            <div class="flex items-center md:mr-4">
                <button class="bg-teal-400 hover:bg-teal-500 text-white font-bold py-2 px-2 rounded-lg inline-flex mr-4" @click="open = true">
                <!-- <svg class="fill-current w-4 h-4 mr-2" xmlns="" viewBox="0 0 20 20"><path d=""/></svg> -->
                <span>Add task</span>
                </button>
                <span>Avatar goes here</span>          
            </div>        
        </nav>
        <div class="md:mx-auto mt-8 max-w md:max-w-2xl shadow-lg">
            <div class="bg-gray-100 text-gray-800 font-semibold py-10"
                x-show="open"
                @click.away="open = false"
            >
            <span class="ml-4 text-md">Task Description</span>
            <input class="bg-white focus:outline-none focus:outline-none border border-gray-300 rounded-lg py-2 px-4 block w-3/4 appearance-none leading-normal ml-4 mt-2 focus:border-teal-300" placeholder="What do you need to do?">
        </div>
    </div>
   
    @yield ('content')
   
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>

</body>

</html>