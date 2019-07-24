@extends('publicSite::layout.app')

@section('title')
الصفحة الرئيسية
@endsection

@section('content')
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">جميع المواضيع</h1>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      @foreach($posts as $post)
      <div class="col-md-4">
        <a href="/{{ config('blog-plugin.public_prefix') }}/post/{{ $post->id }}">
          <div class="card mb-4 shadow-sm">
            <img class="post-thumbnail-picture" src="{{$post->picture}}" alt="">
            <div class="card-body">
              <h4 class="card-title">{{ $post->title }}</h4>
              <h6 class="card-title">{{ $post->author->name }}</h5>
              <p class="card-text">{{ $post->introduction }}</p>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>

<div style="text-align: center">
  <div style="display:-webkit-inline-box;">
    {{ $posts->links() }}
  </div>
</div>
@endsection