<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ... -->
    <title>Your Vue 3 App</title>
</head>
<body>
<div id="app">

</div>

@vite(['resources/js/app.js'])
</body>
</html>
