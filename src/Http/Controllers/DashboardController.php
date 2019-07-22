<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // dont forget to add this 
use Wadahesam\LaravelBlogPlugin\Http\Requests\ImageRequest;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
  /**
   * Handle uploaded images and returns the link for this image
   *
   * @return \Illuminate\Http\Response
   */
  public function uploadImage(ImageRequest $request)
  {
    sleep(1);
    $year_folder = date("Y");
    $month_folder = date("m") . '' . $year_folder;
    $destination_path = 'vendor/blog-plugin/images/uploaded/';
    if (!File::exists($destination_path)) {
      File::makeDirectory($destination_path, $mode = 0755, true, true);
    }
    if (
      $_FILES['file']['type'] ==  'image/jpeg'
      or $_FILES['file']['type'] == 'image/gif'
      or $_FILES['file']['type'] ==  'image/jpg'
      or $_FILES['file']['type'] ==  'image/pjpeg'
      or $_FILES['file']['type'] ==  'image/png'
    ) {
      $type = substr($_FILES['file']['type'], 6);
      if ($_FILES['file']['type'] == 'image/pjpeg') {
        $type = 'jpeg';
      }
      $name = uniqid() . "." . $type;
      $target_path = $destination_path . $name;
      $success = 0;
      if (@move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
        $success = 1;
      }
      if ($success == 1) {
        return response()->json(['path' => $target_path], 200);
      } else {
        return response()->json(['errors' => ['file' => 'خطأ']], 400);
      }
    }
  }
}
