@extends('dashboard::layout.app')

@section('title')
اضافة موضوع
@endsection('title')

@section('content')
  @php 
    $isEdit = false; 
  @endphp
  <form action="/{{config('blog-plugin.prefix')}}/posts" method="POST">
    @include('dashboard::posts.postForm')
  </form>
@endsection