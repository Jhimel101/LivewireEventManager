<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Admin Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

            <!-- Admin Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="p-4 bg-white dark:bg-gray-700 shadow rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Total Users</h3>
                    <p class="text-2xl font-bold text-blue-500">{{ $totalUsers }}</p>
                </div>

                <div class="p-4 bg-white dark:bg-gray-700 shadow rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Total Events</h3>
                    <p class="text-2xl font-bold text-green-500">{{ $totalEvents }}</p>
                </div>
            </div>

            <!-- Event Management Component -->
            <livewire:admin-events />

        </div>
    </div>
</div>