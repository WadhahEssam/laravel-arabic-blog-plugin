<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // dont forget to add this 

class DashboardController extends Controller
{
    public function showPostsMenu() {
        return view('dashboard::posts', ['menu' => 'posts']);
    }   
}
