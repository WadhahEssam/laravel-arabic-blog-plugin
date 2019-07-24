@extends('dashboard::layout.app')

@section('title')
تعديل محرر
@endsection('title')

@section('content')
  @php 
    $isEdit = true; 
  @endphp
  <form class="form" action="/{{config('blog-plugin.prefix')}}/authors/{{$author->id}}" method="POST">
    @method('PUT')
    @include('dashboard::authors.authorForm')
  </form>
@endsection