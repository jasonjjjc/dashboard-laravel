<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>
    @vite('resources/css/app.css')
</head>

<body>
    <container class="flex flex-col min-h-screen bg-black text-white">
        <x-header></x-header>
        <x-spacer></x-spacer>
        {{ $slot}}
        <x-spacer></x-spacer>
        <x-footer></x-footer>
    </container>
</body>

</html>