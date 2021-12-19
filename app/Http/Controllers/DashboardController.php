<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard(){
        $user = Auth::id();
        $courses = Course::where('user_id', $user)->get();
        $posts = Post::where('user_id', $user)->get();

        return view('dashboard.dashboard', ['courses'=> $courses, 'posts'=> $posts]);
    }
}
