<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class PublicSiteController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function showHomePage()
  {
    return view('publicSite::main');
    // $posts = Post::latest()->paginate(15);
    // return view('dashboard::posts.posts', ['menu' => 'posts', 'posts' => $posts]);
  }
}
