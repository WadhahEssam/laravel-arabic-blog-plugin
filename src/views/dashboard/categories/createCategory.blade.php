@extends('dashboard::layout.app')

@section('title')
اضافة تصنيف
@endsection('title')

@section('content')
  @php 
    $isEdit = false; 
  @endphp
  <form class="form" action="/{{config('blog-plugin.prefix')}}/categories" method="POST">
    @include('dashboard::categories.categoryForm')
  </form>
@endsection