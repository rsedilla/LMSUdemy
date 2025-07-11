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
            <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                <a href="{{ route('instructor.manage-courses') }}" class="block bg-blue-50 p-6 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200">
                    <h4 class="font-semibold text-blue-800 mb-2">🎓 Manage Courses</h4>
                    <p class="text-blue-600">Create and manage your course content</p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
