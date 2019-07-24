<fieldset id="fieldset_name">
  <div class="form-group">
    <label for="exampleFormControlInput1">اسم المحرر</label>
    <input name="name" type="text" class="form-control" id="name-field" placeholder="" value="{{ ($isEdit) ? $author->name : '' }}">
  </div>
</fieldset>

<fieldset id="fieldset_description">
  <div class="form-group">
    <label for="description-field">وصف المحرر</label>
    <textarea name="description" class="form-control" id="description-field" rows="3" value="">{{ ($isEdit) ? $author->description : '' }}</textarea>
  </div>
</fieldset>

<fieldset id="fieldset_facebook_link">
  <div class="form-group">
    <label for="facebook-link-field">رابط حساب الفيس بوك</label>
    <input name="facebook_link" type="text" class="form-control" id="facebook-link-field" placeholder="" value="{{ ($isEdit) ? $author->facebook_link : '' }}">
  </div>
</fieldset>

<fieldset id="fieldset_twitter_link">
  <div class="form-group">
    <label for="twitter-link-field">رابط حساب تويتر</label>
    <input name="twitter_link" type="text" class="form-control" id="twitter-link-field" placeholder="" value="{{ ($isEdit) ? $author->twitter_link : '' }}">
  </div>
</fieldset>

<div class="form-submit-button-div" dir="ltr">
  <button type="button" id="save" class="btn btn-success btn-lg">{{($isEdit) ? 'تعديل' : 'إضافة'}}</button>
</div>
