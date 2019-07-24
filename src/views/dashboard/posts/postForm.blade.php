@section('imports')
<!-- Include Editor style. -->
<script src="/vendor/blog-plugin/ckeditor/ckeditor.js"></script>
@endsection

<!-- Photo Upload -->
<fieldset id="fieldset_file">
  <div class="label-div" style="margin-top:10px"><label style="margin-bottom: 22px !important;" class="label-text">صورة الموضوع</label></div>
  <div style="margin-bottom:15px" class="fileinput fileinput-new text-center" data-provides="fileinput">
    <div style="padding:10px" class="fileinput-new thumbnail img-raised">
      <img id="preview-image" style="width: 26%;margin: 13px;" src="{{($isEdit) ? $post->picture : '/vendor/blog-plugin/images/example-news.png'}}" alt="...">
      <div>
        <button type="button" class="btn btn-info btn-round fileinput-exists" id="file-button" class=" fileinput-new">تحديد الصورة</button>
        <input id="file-input" style="display:none" type="file" name="..." />
        <button type="button" onclick="removeImage()" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i style="margin-left:10px" class="fa fa-times"></i>حذف الصورة</button>
      </div>
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
  </div>
</fieldset>
<input id="file_link" type="hidden" name="file" value="{{($isEdit) ? $post->picture : '/vendor/blog-plugin/images/example-news.png'}}"/>
@include('dashboard::scripts.imageSubmittingScript')
<!-- End Photo Upload -->

<fieldset id="fieldset_title">
  <div class="form-group">
    <label for="exampleFormControlInput1">العنوان</label>
    <input name="title" type="text" class="form-control" id="title-field" placeholder="" value="{{ ($isEdit) ? $post->title : '' }}">
  </div>
</fieldset>

<fieldset id="fieldset_introduction">
  <div class="form-group">
    <label for="introduction-field">مقدمة</label>
    <textarea name="introduction" class="form-control" id="introduction-field" rows="3" value="">{{ ($isEdit) ? $post->introduction : '' }}</textarea>
  </div>
</fieldset>

<fieldset id="fieldset_content">
  <div>
    <label for="introduction-field">المحتوى</label>
    <textarea name="content-area" id="content" rows="10" cols="80">{!! ($isEdit) ? $post->content : '' !!}</textarea>
  </div>
</fieldset>
<textarea style="display: none" id="real_content" name="content">{!! ($isEdit) ? $post->content : '' !!}</textarea>

<div class="row">
  <div class="col">
    <fieldset id="fieldset_author" style="margin-top: 13px">
      <label for="author-field">المحرر</label>
      <select name="author" class="form-control" id="author-field">
        <option></option>
        @foreach($authors as $author)
          <option value="{{$author->id}}" @if($isEdit) @if($post->author->id == $author->id) selected @endif @endif>{{$author->name}}</option>
        @endforeach
      </select>
    </fieldset>
  </div>
  <div class="col">
    <fieldset id="fieldset_category" style="margin-top: 13px">
      <label for="category-field">التصنيف</label>
      <select name="category" class="form-control" id="category-field">
        <option></option>
        @foreach($categories as $category)
          <option value="{{$category->id}}" @if($isEdit) @if($post->category->id == $category->id) selected @endif @endif >{{$category->name}}</option>
        @endforeach
      </select>
    </fieldset>
  </div>
</div>

@if (!$isEdit)
<label for="exampleFormControlInput1" style="margin-top: 10px">الكلمات المفتاحية</label>
<fieldset id="fieldset_title">
  <div class="form-group">
    <div class="row">
      <div class="col">
        <input name="keyword[]" type="text" class="form-control" placeholder="" value="{{ ($isEdit && isset($post->keywords[0])) ? $post->keywords[0] : '' }}">
      </div>
      <div class="col">
        <input name="keyword[]" type="text" class="form-control" placeholder="" value="{{ ($isEdit && isset($post->keywords[1])) ? $post->keywords[1] : '' }}">
      </div>
      <div class="col">
        <input name="keyword[]" type="text" class="form-control" placeholder="" value="{{ ($isEdit && isset($post->keywords[2])) ? $post->keywords[2] : '' }}">
      </div>
      <div class="col">
        <input name="keyword[]" type="text" class="form-control" placeholder="" value="{{ ($isEdit && isset($post->keywords[3])) ? $post->keywords[3] : '' }}">
      </div>
      <div class="col">
        <input name="keyword[]" type="text" class="form-control" placeholder="" value="{{ ($isEdit && isset($post->keywords[4])) ? $post->keywords[4] : '' }}">
      </div>
    </div>
  </div>
</fieldset>
@endif

<div class="form-submit-button-div" dir="ltr">
  <button type="button" id="save" class="btn btn-success btn-lg">{{($isEdit) ? 'تعديل' : 'إضافة'}}</button>
</div>

<script>
  var editor = CKEDITOR.replace('content', {
    language: 'ar',
  });
  $('#real_content').val(CKEDITOR.instances.content.getData() + "")
  editor.on('change', function(evt) {
    console.log(CKEDITOR.instances.content.getData());
    $('#real_content').val(CKEDITOR.instances.content.getData() + "")
  });
</script>