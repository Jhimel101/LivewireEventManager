<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-black dark:text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(auth()->check() && auth()->user()->role === 'admin')
            <!-- Admin Dashboard -->
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                <livewire:admin-dashboard />
            </div>
            @else
            <!-- User Dashboard -->
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-black dark:text-white mb-6">
                    Available Events
                </h2>
                <livewire:user-event />
            </div>
            @endif


        </div>
    </div>
</x-app-layout>