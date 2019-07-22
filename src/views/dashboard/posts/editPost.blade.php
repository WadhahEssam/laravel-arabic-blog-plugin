@extends('dashboard::layout.app')

@section('title')
تعديل موضوع
@endsection('title')

@section('content')
  @php 
    $isEdit = true; 
  @endphp
  <form action="/{{config('blog-plugin.prefix')}}/posts" method="PUT">
    @method('PUT')
    @include('dashboard::posts.postForm')
  </form>
@endsection