<x-layouts.app :title="__('Duk Health - Dashboard')">

    <x-slot name="header">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <x-slot name="content">
        <div class="mt-6">
            <p class="text-gray-700 dark:text-gray-300">
                {{ __('Welcome to the Duk Health Admin Panel!') }}
            </p>
            {{-- insertar un boton para ir a counter --}}
            <div class="mt-4">
                <a href="{{ route('counter.index') }}"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    {{ __('Go to Counter') }}
                </a>
            </div>
        </div>
    </x-slot>

</x-layouts.app>