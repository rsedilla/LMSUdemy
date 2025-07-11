<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Instructor Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-2">Welcome back, {{ $instructor->name }}!</h3>
                    <p class="text-gray-600">You're logged in as an <strong>Instructor</strong>.</p>
                </div>
            </div>

            <!-- Quick Actions -->
           
        </div>
    </div>
</x-app-layout>
