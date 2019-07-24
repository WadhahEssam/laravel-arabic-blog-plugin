<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // dont forget to add this 
use Wadahesam\LaravelBlogPlugin\Model\Author;
use Wadahesam\LaravelBlogPlugin\Model\Category;
use Wadahesam\LaravelBlogPlugin\Model\Post;
use Wadahesam\LaravelBlogPlugin\Http\Requests\PostRequest;
use Wadahesam\LaravelBlogPlugin\Http\Requests\CategoryRequest;

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
    return view('dashboard::categories.createCategory', ['menu' => 'categories']);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CategoryRequest $request)
  {
    $newCategory = new Category;
    $newCategory->name = $request->name;
    $newCategory->save();
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
    $category = Category::find($id);
    return view('dashboard::categories.editCategory', ['menu' => 'categories', 'category' => $category]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(CategoryRequest $request, $id)
  {
    $category = Category::find($id);
    $category->name = $request->name;
    $category->save();
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
