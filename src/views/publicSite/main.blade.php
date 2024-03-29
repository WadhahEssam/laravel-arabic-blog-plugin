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
    <div class="row card-deck">
      @foreach($posts as $post)
      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 md-6" style="margin: 10px 0px">
        <a href="/{{ config('blog-plugin.public_prefix') }}/post/{{ $post->id }}" class="card md-6 shadow-sm h-100">
          <img class="post-thumbnail-picture" src="{{$post->picture}}" alt="">
          <div class="card-body">
            <h4><span class="badge badge-secondary">{{ $post->category->name }}</span></h4>
            <h4 class="card-title">{{ $post->title }}</h4>
            <h6 class="card-title">{{ $post->author->name }}</h5>
            <p class="card-text">{{ $post->introduction }}</p>
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