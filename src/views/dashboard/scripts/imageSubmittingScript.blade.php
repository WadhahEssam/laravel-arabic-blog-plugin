<script>
    $('#file-button').click( function(e) {
        e.preventDefault(); 
        $('#file-input').trigger('click');
    });
    $('#file-input').change(function() {
      console.log('file is submitted');
      if ($('#file-input').get(0).files.length === 0) {
        console.log("No files selected.");
      } else { 
        var file_data = $('#file-input').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        $('.validation-div').hide();
        var button = $('#file-button');
        $(button).attr("disabled", true);
        $(button).append('<i class="wait fa fa-spinner fa-spin fa-fw" style="font-size:15px;position:relative;left:-7px;bottom:1px"></i>');
        $.ajax({
            url: '/{{config('blog-plugin.prefix')}}/uploadImage', 
            dataType: 'json', 
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                document.getElementById("preview-image").src="/" + response.path;
                $('#file_link').attr('value', "/" + response.path);
                $( ".wait" ).remove();
                $(button).attr("disabled", false);
            },
            error: function (jqXHR,status,err) {
                var errors = jqXHR.responseJSON.errors;
                $(".alert").removeClass('bg-danger');
                $.each(errors, function (index, value) {
                  // TODO: remove this if not needed 
                    $("#fieldset_"+index).append("<div class='validation-div alert alert-danger validation-div'>"+value+"</div>");
                });
                $( ".wait" ).remove();
                $(button).attr("disabled", false);
            }
        });
      }
    });

    function removeImage(e) {
      document.getElementById("preview-image").src = "/images/example.jpg";
      $('#file_link').attr('value', "/images/example.jpg");
    }
  </script>