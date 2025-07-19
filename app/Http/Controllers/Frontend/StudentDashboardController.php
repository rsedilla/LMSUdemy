<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    /**
     * Show the student dashboard.
     */
    public function index(): View
    {
        $student = Auth::user();
        
        return view('frontend.student-dashboard.index', compact('student'));
    }

    /**
     * Show student courses.
     */
    public function courses(): View
    {
        $student = Auth::user();
        
        // TODO: Get student's enrolled courses
        $courses = collect(); // Placeholder for now
        
        return view('student.courses', compact('student', 'courses'));
    }

    /**
     * Show student profile.
     */
    public function profile(): View
    {
        $student = Auth::user();
        
        return view('student.profile', compact('student'));
    }
}
