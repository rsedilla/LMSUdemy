<?php

use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\InstructorDashboardController;
use App\Http\Controllers\Frontend\StudentDashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application.
|--------------------------------------------------------------------------
*/

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|--------------------------------------------------------------------------
| Authenticated User Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:web', 'verified'])->group(function () {
    
    // Main dashboard - redirects based on user role
    Route::get('/dashboard', function () {
        $user = Auth::user();
        
        return match($user->role) {
            'instructor' => redirect()->route('instructor.dashboard'),
            'student' => redirect()->route('student.dashboard'),
            default => view('dashboard')
        };
    })->name('dashboard');

    // Profile routes (if needed)
    Route::get('/profile', [UserController::class, 'profile'])->name('profile.show');
    Route::get('/settings', [UserController::class, 'settings'])->name('profile.settings');
    Route::get('/notifications', [UserController::class, 'notifications'])->name('profile.notifications');
});

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:web', 'verified'])
    ->prefix('student')
    ->name('student.')
    ->group(function () {
        Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('dashboard');
        Route::get('/courses', [StudentDashboardController::class, 'courses'])->name('courses');
        Route::get('/profile', [StudentDashboardController::class, 'profile'])->name('profile');
    });

/*
|--------------------------------------------------------------------------
| Instructor Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:web', 'verified'])
    ->prefix('instructor')
    ->name('instructor.')
    ->group(function () {
        Route::get('/dashboard', [InstructorDashboardController::class, 'index'])->name('dashboard');
        Route::get('/courses', [InstructorDashboardController::class, 'courses'])->name('courses');
        Route::get('/profile', [InstructorDashboardController::class, 'profile'])->name('profile');
        Route::get('/manage-courses', [InstructorDashboardController::class, 'manageCourses'])->name('manage-courses');
    });

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:admin', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
