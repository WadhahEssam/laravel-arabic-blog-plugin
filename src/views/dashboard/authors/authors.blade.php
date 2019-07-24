@extends('dashboard::layout.app')

@section('title')
المحررين
@endsection('title')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="text-center" scope="col">#</th>
      <th class="text-center" scope="col">اسم المحرر</th>
      <th class="text-center" scope="col">وصف المحرر</th>
      <th class="text-center" scope="col">حساب الفيسبوك</th>
      <th class="text-center" scope="col">حساب تويتر</th>
      <th class="text-center" scope="col">عدد المواضيع</th>
      <th class="text-center" scope="col">الخيارات</th>
    </tr>
  </thead>
  <tbody>
    @foreach($authors as $author)
    <tr>
      <td class="text-center" scope="row">{{ $author->id }}</td>
      <td class="text-center">{{ $author->name }}</td>
      <td class="text-center">{{ $author->description }}</td>
      <td class="text-center"><a href="{{$author->facebook_link}}" target="_blank">Facebook</a></td>
      <td class="text-center"><a href="{{$author->twitter_link}}" target="_blank">Twitter</a></td>
      <td class="text-center">{{ $author->posts->count() }}</td>
      <td class="text-center" style="min-width: 270px;">
        <button onclick='location.href="/{{config("blog-plugin.prefix")}}/authors/{{$author->id}}/edit"' style="" type="submit" class="btn btn-primary btn-sm options-button"><i class="wait fa fa-edit" style="font-size:15px;position:relative;left:4px;bottom:-2px"></i> تعديل</button>
        @if ($author->posts->count() == 0) 
          <button style="" data-toggle="modal" data-target="#deleteConfirmationModal{{$author->id}}" type="submit" class="btn btn-danger btn-sm options-button"><i class="wait fa fa-times" style="font-size:15px;position:relative;left:4px;bottom:-2px"></i> حذف</button>
        @endif
      </td>
    </tr>
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal{{$author->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModal{{$author->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title force-font" id="deleteConfirmationModal{{$author->id}}">حذف  {{$author->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" dir="rtl">
            <form action="/{{config('blog-plugin.prefix')}}/authors/{{$author->id}}" method="POST">
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
    {{ $authors->links() }}
  </div>
</div>
@endsection