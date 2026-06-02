<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire&Factories</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>

    <x-navbar></x-navbar>

    <div class="container-fluid min-vh-100 m-0 p-0 bg-azzurro">
        {{ $slot }}
    </div>

    @livewireScripts

</body>
</html>