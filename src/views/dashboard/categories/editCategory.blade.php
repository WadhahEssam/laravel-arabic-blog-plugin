@extends('dashboard::layout.app')

@section('title')
تعديل تصنيف
@endsection('title')

@section('content')
  @php 
    $isEdit = true; 
  @endphp
  <form class="form" action="/{{config('blog-plugin.prefix')}}/categories/{{$category->id}}" method="POST">
    @method('PUT')
    @include('dashboard::categories.categoryForm')
  </form>
@endsection