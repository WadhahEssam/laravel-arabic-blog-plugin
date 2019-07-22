@extends('dashboard::layout.app')

@section('title')
المواضيع  
@endsection('title')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">الصورة</th>
      <th scope="col">العنوان</th>
      <th scope="col">التصنيف</th>
      <th scope="col">المقدمة</th>
      <th scope="col">المحتوى</th>
      <th scope="col">الكلمات المفتاحية</th>
      <th scope="col">الخيارات</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
@endsection