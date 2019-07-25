@extends('publicSite::layout.app')

@section('head')
<meta content="{{ $post->introduction }}" name="description">
<meta content="{{ env('APP_URL') }}" property="og:url">
<meta content="{{ $post->title }}" property="og:title">
<meta content="{{ $post->introduction }}" property="og:description">
<meta content="{{ env('APP_URL') . $post->picture }}" property="og:image">
<meta content="{{ $post->title }}" name="twitter:title">
<meta content="{{ env('APP_NAME') }}" property="og:site_name">
<meta content="{{ $post->title }}" property="og:title">
<meta content="{{ $post->author }}" property="article:author">
<meta content="{{ env('APP_URL') . $post->picture }}" property="og:url">
<meta content="{{ env('APP_URL') . $post->picture }}" property="og:image:alt">
<meta content="{{ $post->introduction }}" name="og:description">
<meta content="{{ env('APP_URL') . $post->picture }}" name="twitter:image">
<meta content="{{ $post->introduction }}" name="twitter:description">
@endsection 

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
    <a href="/{{config('blog-plugin.public_prefix')}}/keyword/{{ $keyword->name }}">
      <span class="badge badge-secondary">{{ $keyword->name }}</span>
    </a>
    @endforeach
  </div>


  <div id="social-links" style="text-align: center; margin-top: 40px">
    <p>شارك الموضوع</p>
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}&title={{$post->title}}" id=""><img class="social-button" src="/vendor/blog-plugin/images/facebook.png" alt=""></a>
    <a href="https://twitter.com/intent/tweet?text={{$post->title}}&amp;url={{ Request::url() }}" id=""><img class="social-button" src="/vendor/blog-plugin/images/twitter.png" alt=""></a>
    <a href="https://wa.me/?text={{ Request::url() }}" id=""><img class="social-button" src="/vendor/blog-plugin/images/whatsapp.png" alt=""></a>
    <a href="https://t.me/share/url?url={{Request::url()}}&text={{$post->title}}" id=""><img class="social-button" src="/vendor/blog-plugin/images/telegram.png" alt=""></a>
  </div>

</section>


@endsection