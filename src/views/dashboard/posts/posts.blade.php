@extends('dashboard::layout.app')

@section('title')
المواضيع
@endsection('title')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="text-center" scope="col">#</th>
      <th class="text-center" scope="col">الصورة</th>
      <th class="text-center" scope="col">العنوان</th>
      <th class="text-center" scope="col">التصنيف</th>
      <th class="text-center" scope="col">المحرر</th>
      <th class="text-center" scope="col">الخيارات</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <td class="text-center" scope="row">{{ $post->id }}</td>
      <td class="text-center">
        <img src="{{ $post->picture }}" class="rounded mx-auto d-block post-picture" alt="...">
      </td>
      <td class="text-center">{{ $post->title }}</td>
      <td class="text-center">{{ $post->category->name }}</td>
      <td class="text-center">{{ $post->author->name }}</td>
      <td class="text-center" style="min-width: 270px;">
        <button style="" type="submit" class="btn btn-success btn-sm options-button"><i class="wait fa fa-eye" style="font-size:15px;position:relative;left:4px;bottom:-2px"></i> معاينة</button>
        <button onclick='location.href="/{{config("blog-plugin.prefix")}}/posts/{{$post->id}}/edit"' style="" type="submit" class="btn btn-primary btn-sm options-button"><i class="wait fa fa-edit" style="font-size:15px;position:relative;left:4px;bottom:-2px"></i> تعديل</button>
        <button style="" data-toggle="modal" data-target="#deleteConfirmationModal{{$post->id}}" type="submit" class="btn btn-danger btn-sm options-button"><i class="wait fa fa-times" style="font-size:15px;position:relative;left:4px;bottom:-2px"></i> حذف</button>
      </td>
    </tr>
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModal{{$post->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title force-font" id="deleteConfirmationModal{{$post->id}}">حذف  {{$post->title}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" dir="rtl">
            <form action="/{{config('blog-plugin.prefix')}}/posts/{{$post->id}}" method="POST">
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
<div style="text-align: center">
  <div style="display:-webkit-inline-box;">
    {{ $posts->links() }}
  </div>
</div>
@endsection