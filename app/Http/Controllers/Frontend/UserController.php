<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Show the general dashboard (fallback).
     * This is used as a fallback when user role doesn't match specific roles.
     */
    public function index(): View 
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    /**
     * Show user profile page.
     */
    public function profile(): View
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    /**
     * Show user settings page.
     */
    public function settings(): View
    {
        $user = Auth::user();
        return view('profile.settings', compact('user'));
    }

    /**
     * Handle general user actions that apply to all user types.
     */
    public function notifications(): View
    {
        $user = Auth::user();
        // TODO: Get user notifications
        $notifications = collect(); // Placeholder
        
        return view('profile.notifications', compact('user', 'notifications'));
    }
}
