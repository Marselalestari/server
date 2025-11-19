<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body style="
        margin:0;
        padding:0;
        width:100%;
        height:100vh;
        min-height:100vh;
        background:url('/your-bg-image.jpg');
        background-size:cover;
        background-position:center;
        display:flex;
        justify-content:center;
        align-items:center;
    ">
        {{ $slot }}
    </body>
</html>
