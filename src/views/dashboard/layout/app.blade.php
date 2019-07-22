<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>
    لوحة التحكم - 
    @yield('title')
  </title>

  <!-- Bootstrap core CSS -->
  <link 
  rel="stylesheet"
  href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
  integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"
  crossorigin="anonymous">
  <!-- Bootstrap js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">
  @yield('imports')
  @include('dashboard::layout.style')
</head>

<body class="bg-light" dir="rtl">
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand mr-auto mr-lg-0" href="#">لوحة التحكم</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>

  <main role="main" class="container main-container">
    <div class="nav-scroller bg-white shadow-sm">
      <nav class="nav nav-underline">
        <a class="nav-link {{($menu == 'posts') ? 'active' : ''}}" href="{{'/'.config('blog-plugin.prefix').'/posts'}}">المواضيع</a>
        <a class="nav-link {{($menu == 'createPost') ? 'active' : ''}}" href="{{'/'.config('blog-plugin.prefix').'/posts/create'}}">إضافة موضوع</a>
        <a class="nav-link" href="#">التصنيفات</a>
        <a class="nav-link" href="#">إضافة تصنيف</a>
        <a class="nav-link" href="#">المحررين</a>
        <a class="nav-link" href="#">إضافة محرر</a>
      </nav>
    </div>

    <div class="page-title">
      <h1>
        @yield('title')
      </h1>
    </div>
    <div class="container my-3 p-3 bg-white rounded shadow-sm">
      <div class="section">
        @yield('content')
      </div>
    </div>

  </main>
  <script>
    $(function() {
      'use strict'
      $('[data-toggle="offcanvas"]').on('click', function() {
        $('.offcanvas-collapse').toggleClass('open')
      })
    })
  </script>
</body>

</html>