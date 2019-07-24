@extends('dashboard::layout.app')

@section('title')
التصنيفات
@endsection('title')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="text-center" scope="col">#</th>
      <th class="text-center" scope="col">اسم التصنيف</th>
      <th class="text-center" scope="col">عدد المواضيع</th>
      <th class="text-center" scope="col">الخيارات</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td class="text-center" scope="row">{{ $category->id }}</td>
      <td class="text-center">{{ $category->name }}</td>
      <td class="text-center">{{ $category->posts->count() }}</td>
      <td class="text-center" style="min-width: 270px;">
        <button onclick='location.href="/{{config("blog-plugin.prefix")}}/categories/{{$category->id}}/edit"' style="" type="submit" class="btn btn-primary btn-sm options-button"><i class="wait fa fa-edit" style="font-size:15px;position:relative;left:4px;bottom:-2px"></i> تعديل</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection