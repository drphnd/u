<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="min-h-full">
        <x-navigation></x-navigation>
        <x-header>{{ $layoutTitle }}</x-header>

        <main>
            <div>
                {{ $slot }}
            </div>
  
        </main>
    </div>
</body>
</html>