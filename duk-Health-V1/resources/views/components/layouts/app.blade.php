<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="relative min-h-screen bg-white dark:bg-zinc-800">
    {{-- Header --}}
    @include('components.layouts.app.header')

    {{-- Sidebar --}}
    @include('components.layouts.app.sidebar')

    {{-- Contenido principal --}}
    <flux:main class="pt-16 px-4 lg:pl-72">
        @isset($header)
            <div class="mb-4">
                {{ $header }}
            </div>
        @endisset

        @isset($content)
            {{ $content }}
        @else
            {{ $slot }}
        @endisset
    </flux:main>

    @fluxScripts
</body>

</html>