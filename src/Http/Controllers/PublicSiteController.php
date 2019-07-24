<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Wadahesam\LaravelBlogPlugin\Model\Post;

class PublicSiteController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function showHomePage()
  {
    $posts = Post::paginate(10);
    return view('publicSite::main', ['posts' => $posts]);
  }
}
