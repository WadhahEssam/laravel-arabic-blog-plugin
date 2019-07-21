<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // dont forget to add this 

class DashboardController extends Controller
{
    public function add($a, $b){
        $result = $a + $b;

        return view('blogPlugin::add', compact('result'));
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }
}
