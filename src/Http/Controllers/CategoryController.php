<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // dont forget to add this 
use Wadahesam\LaravelBlogPlugin\Model\Author;
use Wadahesam\LaravelBlogPlugin\Model\Category;
use Wadahesam\LaravelBlogPlugin\Model\Post;
use Wadahesam\LaravelBlogPlugin\Http\Requests\PostRequest;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = Category::all();
    return view('dashboard::categories.categories', ['menu' => 'categories', 'categories' => $categories]);
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
  public function update(PostRequest $request, $id)
  {
    $post = Post::find($id);
    $post->title = $request->title;
    $post->picture = $request->file;
    $post->introduction = $request->introduction;
    $post->content = $request->content;
    $post->category_id = $request->category;
    $post->author_id = $request->author;
    $post->save();
    return response()->json('good', 200);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Post::find($id)->delete();
    return redirect()->route('posts.index')->with('success', 'تم الحذف بنجاح');
  }
}
