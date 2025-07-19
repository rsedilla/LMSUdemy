<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class InstructorDashboardController extends Controller
{
    /**
     * Show the instructor dashboard.
     */
    public function index(): View
    {
        $instructor = Auth::user();
        
        return view('frontend.instructor-dashboard.index', compact('instructor'));
    }

    /**
     * Show instructor courses.
     */
    public function courses(): View
    {
        $instructor = Auth::user();
        
        // TODO: Get instructor's courses from the database
        $courses = collect(); // Placeholder for now
        
        return view('instructor.courses', compact('instructor', 'courses'));
    }

    /**
     * Show instructor profile.
     */
    public function profile(): View
    {
        $instructor = Auth::user();
        
        return view('instructor.profile', compact('instructor'));
    }

    /**
     * Show course management page.
     */
    public function manageCourses(): View
    {
        $instructor = Auth::user();
        
        // TODO: Get instructor's courses with detailed information
        $courses = collect(); // Placeholder
        
        return view('instructor.manage-courses', compact('instructor', 'courses'));
    }
}
