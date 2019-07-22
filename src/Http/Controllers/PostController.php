<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // dont forget to add this 
use Wadahesam\LaravelBlogPlugin\Model\Author;
use Wadahesam\LaravelBlogPlugin\Model\Category;
use Wadahesam\LaravelBlogPlugin\Model\Post;
use Wadahesam\LaravelBlogPlugin\Http\Requests\PostRequest;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $posts = Post::latest()->paginate(15);
    return view('dashboard::posts.posts', ['menu' => 'posts', 'posts' => $posts]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $authors = Author::all();
    $categories = Category::all();
    return view('dashboard::posts.createPost', ['menu' => 'posts', 'authors' => $authors, 'categories' => $categories]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(PostRequest $request)
  {
    $newPost = new Post;
    $newPost->title = $request->title;
    $newPost->picture = $request->file;
    $newPost->introduction = $request->introduction;
    $newPost->content = $request->content;
    $newPost->category_id = $request->category;
    $newPost->author_id = $request->author;
    $newPost->save();
    return response()->json('good', 200);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $authors = Author::all();
    $categories = Category::all();
    $post = Post::find($id);
    return view('dashboard::posts.editPost', ['menu' => 'posts', 'post' => $post, 'authors' => $authors, 'categories' => $categories]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
