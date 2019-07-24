@extends('dashboard::layout.app')

@section('title')
اضافة محرر 
@endsection('title')

@section('content')
  @php 
    $isEdit = false; 
  @endphp
  <form class="form" action="/{{config('blog-plugin.prefix')}}/authors" method="POST">
    @include('dashboard::authors.authorForm')
  </form>
@endsection