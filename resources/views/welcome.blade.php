<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Again</title>

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body class="app">
        <x-avatar size="big"/>
        <x-button>Select users</x-button>
    </body>
</html>
