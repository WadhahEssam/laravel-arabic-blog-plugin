@extends('dashboard::layout.app')

@section('title')
اضافة موضوع
@endsection('title')

@section('content')
  @php 
    $isEdit = false; 
  @endphp
  @include('dashboard::posts.postForm')
@endsection