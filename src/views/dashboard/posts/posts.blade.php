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
      <td class="text-center">Mark</td>
      <td class="text-center">{{ $post->title }}</td>
      <td class="text-center">{{ $post->category->name }}</td>
      <td class="text-center">{{ $post->author->name }}</td>
      <td class="text-center">
        <button style="" type="submit" class="btn btn-danger btn-sm options-button"><i class="wait fa fa-times" style="font-size:15px;position:relative;left:4px;bottom:-2px"></i> حذف</button>
        <button style="" type="submit" class="btn btn-primary btn-sm options-button"><i class="wait fa fa-edit" style="font-size:15px;position:relative;left:4px;bottom:-2px"></i> تعديل</button>
        <button style="" type="submit" class="btn btn-success btn-sm options-button"><i class="wait fa fa-eye" style="font-size:15px;position:relative;left:4px;bottom:-2px"></i> معاينة</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div style="text-align: center">
  <div style="display:-webkit-inline-box;">
    {{ $posts->links() }}
  </div>
</div>
@endsection