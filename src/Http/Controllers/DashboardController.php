<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // dont forget to add this 

class DashboardController extends Controller
{
    public function showDashboard() {
        return view('dashboard::layout.app');
    }   
}
