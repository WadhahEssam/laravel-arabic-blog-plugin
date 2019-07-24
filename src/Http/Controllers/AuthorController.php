<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // dont forget to add this 
use Wadahesam\LaravelBlogPlugin\Model\Author;
use Wadahesam\LaravelBlogPlugin\Model\Category;
use Wadahesam\LaravelBlogPlugin\Model\Post;
use Wadahesam\LaravelBlogPlugin\Http\Requests\PostRequest;
use Wadahesam\LaravelBlogPlugin\Http\Requests\CategoryRequest;
use Wadahesam\LaravelBlogPlugin\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $authors = Author::latest()->paginate(15);
    return view('dashboard::authors.authors', ['menu' => 'authors', 'authors' => $authors]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('dashboard::authors.createAuthor', ['menu' => 'authors']);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(AuthorRequest $request)
  {
    $newAuthor = new Author;
    $newAuthor->name = $request->name;
    $newAuthor->description = $request->description;
    $newAuthor->facebook_link = $request->facebook_link;
    $newAuthor->twitter_link = $request->twitter_link;
    $newAuthor->save();
    return response()->json('good', 200);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $author = Author::find($id);
    return view('dashboard::authors.editAuthor', ['menu' => 'authors', 'author' => $author]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(AuthorRequest $request, $id)
  {
    $author = Author::find($id);
    $author->name = $request->name;
    $author->description = $request->description;
    $author->facebook_link = $request->facebook_link;
    $author->twitter_link = $request->twitter_link;
    $author->save();
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
    $category = Category::find($id);
    if ($category->posts->count() == 0) {
      $category->delete();
      return redirect()->route('categories.index')->with('success', 'تم الحذف بنجاح');
    } else {
      return redirect()->route('categories.index')->with('error', 'لا يمكن حذف التصنيفات التي تحتوي على مواضيع');
    }
  }
}
