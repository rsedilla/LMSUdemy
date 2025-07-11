<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Welcome, {{ $user->name }}!</h3>
                    <p class="mb-4">{{ __("You're logged in!") }}</p>
                    
                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                        <h4 class="font-semibold text-yellow-800 mb-2">🚀 Getting Started</h4>
                        <p class="text-yellow-700 mb-3">Your account role: <strong>{{ ucfirst($user->role) }}</strong></p>
                        
                        @if($user->role === 'student')
                            <p class="text-yellow-700 mb-2">You should be redirected to the student dashboard automatically.</p>
                            <a href="{{ route('student.dashboard') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">
                                Go to Student Dashboard
                            </a>
                        @elseif($user->role === 'instructor')
                            <p class="text-yellow-700 mb-2">You should be redirected to the instructor dashboard automatically.</p>
                            <a href="{{ route('instructor.dashboard') }}" class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition-colors">
                                Go to Instructor Dashboard
                            </a>
                        @else
                            <p class="text-yellow-700">Please contact your administrator to set up your account role.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
