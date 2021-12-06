<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Job::with('category')->limit(6)->get();
        $posts = Post::with('category')->limit(6)->get();
        return view('client.index', compact('jobs', 'posts'));
    }
}
