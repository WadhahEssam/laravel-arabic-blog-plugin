@extends('publicSite::layout.app')

@section('title')
{{ $post->title }}
@endsection

@section('content')
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">{{ $post->title }}</h1>
    <hr />
    <p class="lead text-muted">{{ $post->author->name }} • {{ $post->created_at->toFormattedDateString() }}</p>
  </div>
</section>


<section style="padding: 20px 20px" class="jumbotron text-center">
  <br />
  <img class="img-fluid rounded post-picture" src="{{$post->picture}}" alt="">
  <p class="lead text-muted post-introduction">{{ $post->introduction }}</p>
  <div class="post-content" >
    {!! $post->content !!}
  </div>
  <hr />
  <div class="container" style="text-align: right;">
    <p>الكلمات المفتاحية</p>
    @foreach($post->keywords as $keyword)
    <span class="badge badge-secondary">{{ $keyword->name }}</span>
    @endforeach
  </div>
</section>
@endsection