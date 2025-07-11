<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Course Management</h3>
                    <p class="mb-4">Welcome, {{ $instructor->name }}! Here you can manage your courses.</p>
                    
                    @if($courses->isEmpty())
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-600">No courses found. You can create your first course here.</p>
                        </div>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($courses as $course)
                                <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                                    <h4 class="font-semibold text-blue-800">{{ $course->title ?? 'Course Title' }}</h4>
                                    <p class="text-blue-600">{{ $course->description ?? 'Course description' }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
