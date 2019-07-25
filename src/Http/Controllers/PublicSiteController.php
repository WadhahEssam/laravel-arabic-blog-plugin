<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Wadahesam\LaravelBlogPlugin\Model\Post;
use Wadahesam\LaravelBlogPlugin\Model\Keyword;

class PublicSiteController extends Controller
{
  /**
   * Display the home page of the public site
   *
   * @return \Illuminate\Http\Response
   */
  public function showHomePage()
  {
    $posts = Post::paginate(10);
    return view('publicSite::main', ['posts' => $posts, 'title' => 'جميع المواضيع']);
  }

  /**
   * Display the page for the specefic post
   *
   * @return \Illuminate\Http\Response
   */
  public function showPostPage($id)
  {
    $post = Post::find($id);
    return view('publicSite::post', ['post' => $post]);
  }

  /**
   * Show all the posts for a specefic keywords
   *
   * @return \Illuminate\Http\Response
   */
  public function showPostsWithKeyword($keyword)
  {
    $keywordCollection = Keyword::where('name', $keyword)->first();
    $posts = $keywordCollection->posts()->paginate();
    return view('publicSite::main', ['posts' => $posts, 'title' => 'الواضيع التي تحوي ' . $keyword . ' ككلمة مفتاحية']);
  }
}
