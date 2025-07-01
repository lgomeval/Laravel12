<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    @include('components.layouts.app.header')

    @include('components.layouts.app.sidebar')

<flux:main class="pt-16 px-4">
    {{ $slot }}
</flux:main>

    @fluxScripts
</body>

</html>