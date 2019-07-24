@extends('dashboard::layout.app')

@section('title')
تعديل موضوع
@endsection('title')

@section('content')
  @php 
    $isEdit = true; 
  @endphp
  <form class="form" action="/{{config('blog-plugin.prefix')}}/posts/{{$post->id}}" method="POST">
    @method('PUT')
    @include('dashboard::posts.postForm')
  </form>
@endsection