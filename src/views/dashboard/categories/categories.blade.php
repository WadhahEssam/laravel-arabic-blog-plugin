@extends('dashboard::layout.app')

@section('title')
التصنيفات
@endsection('title')

@section('headerButton')
  <button onclick='location.href="/{{config("blog-plugin.prefix")}}/categories/create"' type="button" class="btn btn-success">اضافة تصنيف</button>
@endsection

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
        @if ($category->posts->count() == 0)
          <button style="" data-toggle="modal" data-target="#deleteConfirmationModal{{$category->id}}" type="submit" class="btn btn-danger btn-sm options-button"><i class="wait fa fa-times" style="font-size:15px;position:relative;left:4px;bottom:-2px"></i> حذف</button>
        @endif
      </td>
    </tr>
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModal{{$category->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title force-font" id="deleteConfirmationModal{{$category->id}}">حذف  {{$category->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" dir="rtl">
            <form action="/{{config('blog-plugin.prefix')}}/categories/{{$category->id}}" method="POST">
              @csrf
              @method('DELETE')
              </br>
              <button style="padding:15px 30px;margin: 10px;" type="submit " class="btn btn-danger btn-lg">حذف</button>
              <button style="padding:15px 30px;margin: 10px;" type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">الغاء</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Delete Modal -->
    @endforeach
  </tbody>
</table>
@endsection