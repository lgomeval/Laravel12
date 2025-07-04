<div class="overflow-x-auto rounded-xl shadow-sm">
    <table {{ $attributes->merge(['class' => 'min-w-full divide-y divide-gray-200 dark:divide-blue-300' ]) }}>
        <thead class="bg-gray-100 dark:bg-gray-800 text-xs uppercase text-gray-500 dark:text-gray-300">
            {{ $thead ?? '' }}
        </thead>
        <tbody class="bg-white dark:bg-zinc-900 divide-y divide-gray-200 dark:divide-blue-300 text-sm text-gray-700 dark:text-gray-200">
            {{ $slot }}
        </tbody>
    </table>
</div>
