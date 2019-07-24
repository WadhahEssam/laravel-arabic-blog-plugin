
<fieldset id="fieldset_name">
  <div class="form-group">
    <label for="name-field">اسم التصنيف</label>
    <input name="name" type="text" class="form-control" id="name-field" placeholder="" value="{{ ($isEdit) ? $category->name : '' }}">
  </div>
</fieldset>

<div class="form-submit-button-div" dir="ltr">
  <button type="button" id="save" class="btn btn-success btn-lg">{{($isEdit) ? 'تعديل' : 'إضافة'}}</button>
</div>