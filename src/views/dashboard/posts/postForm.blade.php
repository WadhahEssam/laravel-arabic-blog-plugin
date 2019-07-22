<form>
  <!-- Photo Upload -->
  <fieldset id="fieldset_file">
    <div class="label-div" style="margin-top:10px"><label style="margin-bottom: 22px !important;" class="label-text">صورة الموضوع</label></div>
    <div style="margin-bottom:15px" class="fileinput fileinput-new text-center" data-provides="fileinput">
      <div style="padding:10px" class="fileinput-new thumbnail img-raised">
        <img id="preview-image" style="width: 26%;margin: 13px; @if(!$isEdit) display:none; @endif" src="" alt="...">
        <div>
          <button type="button" class="btn btn-info btn-round fileinput-exists" id="file-button" class=" fileinput-new">تحديد الصورة</button>
          <input id="file-input" style="display:none" type="file" name="..." />
          <button type="button" onclick="removeImage()" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i style="margin-left:10px" class="fa fa-times"></i>حذف الصورة</button>
        </div>
      </div>
      <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
    </div>
  </fieldset>
  <input id="file_link" type="hidden" name="file" value="" />

  <div class="form-group">
    <label for="exampleFormControlInput1">العنوان</label>
    <input type="text" class="form-control" id="title-field" placeholder="">
  </div>
</form>