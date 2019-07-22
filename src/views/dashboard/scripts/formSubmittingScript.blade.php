<script>
  $(document).ready(function() {
    $("#save").on('click', function(event) {
      $('.validation-div').hide();
      event.preventDefault();
      var form = $(this).parents('form:first');
      var button = $(this);
      $(button).attr("disabled", true);
      $(button).append('<i class="wait fa fa-spinner fa-spin fa-fw" style="font-size:15px;position:relative;left:4px;bottom:1px"></i>');
      $(".error_msg").html(" ");
      $(".has-error-text").html(" ");
      $(".has-error").removeClass("has-error");
      $("#result").text('');

      $.ajax({
          url: form.attr('action'),
          type: "POST",
          data: form.serialize(),
          dataType: "json"
        })
        .done(function(data, status, jqXHR) {
          console.log(data);
          $("#contactform").hide();
          $('#exampleModalCenter').modal('hide');
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
          $("#thanksMsg").show();
          if ($("#save").text() == 'إضافة') {
            location.href = "/admin/{{$menu}}?success=تمت الاضافة بنجاح";
          } else {
            location.href = "/admin/{{$menu}}?success=تم التعديل بنجاح";
          }
        }).fail(function(jqXHR, status, err) {
          console.log(jqXHR.responseJSON.errors);
          if (jqXHR.responseJSON.errors.nothing_changed) {
            location.href = "/admin/{{$menu}}?warning={{__('dashboard.nothing_changed_warning')}}";
          }
          $(button).attr("disabled", false);
          $(".wait").remove();
          var errors = jqXHR.responseJSON.errors;
          $(".alert").removeClass('bg-danger');
          $.each(errors, function(index, value) {
            // TODO: remove this if not needed 
            console.log(index + " " + value);
            $("#fieldset_" + index).append("<div class='validation-div alert alert-danger validation-div'>" + value + "</div>");
          });
        });
    });
  });
</script>