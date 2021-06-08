<?php
$image = head($files);
?>
<div class="<?php echo e($field); ?>-file-cropper text-center">
    <img src='<?php echo url(@$src); ?>' alt="" class="img-responsive" id="image-<?php echo e($field); ?>">
    <br/>
    <div class="btn-group">

    <label class="btn btn-primary" for="inputImage" title="Change Image">
      <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png">
      <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Upload new image">
        <span class="fa fa-upload"></span>
      </span>
    </label>
    <button type="button" class="btn btn-primary" data-method="save" title="" id="<?php echo e($field); ?>-save-image">
      <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Save">
        <span class="fa fa-floppy-o"></span>
      </span>
    </button>
  </div>
  <input type="hidden" name="<?php echo e($field); ?>[0][caption]"  id="<?php echo e($field); ?>_caption"  value="<?php echo e($image['caption']); ?>">
  <input type="hidden" name="<?php echo e($field); ?>[0][file]"  id="<?php echo e($field); ?>_file"  value="<?php echo e($image['file']); ?>">
  <input type="hidden" name="<?php echo e($field); ?>[0][folder]"  id="<?php echo e($field); ?>_folder"  value="<?php echo e($image['folder']); ?>">
  <input type="hidden" name="<?php echo e($field); ?>[0][path]"  id="<?php echo e($field); ?>_path"  value="<?php echo e($image['path']); ?>">
  <input type="hidden" name="<?php echo e($field); ?>[0][time]"  id="<?php echo e($field); ?>_time"  value="<?php echo e($image['time']); ?>">
</div>

<script type="text/javascript">
$(function () {

  'use strict';

  var URL = window.URL || window.webkitURL;
  var $image = $('#image-<?php echo e($field); ?>');
  var options = {
        aspectRatio: 1 / 1,
        preview: '.img-preview',
      };
  var originalImageURL = $image.attr('src');
  var uploadedImageURL;
  var imageName = "profile.png";

  // Cropper
  $image.cropper(options);

  // Methods
  $('#<?php echo e($field); ?>-save-image').on('click', function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    // Upload cropped image to server if the browser supports `HTMLCanvasElement.toBlob`
    $image.cropper('getCroppedCanvas').toBlob(function (blob) {
      var formData = new FormData();

      formData.append('file', blob, imageName);

      $.ajax('<?php echo e(@$url); ?>', {
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (data, textStatus, jqXHR) {
            $('#<?php echo e($field); ?>_caption').val(data.caption);
            $('#<?php echo e($field); ?>_file').val(data.file);
            $('#<?php echo e($field); ?>_folder').val(data.folder);
            $('#<?php echo e($field); ?>_path').val(data.path);
            $('#<?php echo e($field); ?>_time').val(data.time);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            app.message(jqXHR);
        }
      });
      return false;
    });
    return false;
  });


  // Import image
  var $inputImage = $('#inputImage');

  if (URL) {
    $inputImage.change(function () {
      var files = this.files;
      var file;
      
      if (!$image.data('cropper')) {
        return;
      }

      if (files && files.length) {
        file = files[0];
        imageName = file.name;
        if (/^image\/\w+$/.test(file.type)) {
          if (uploadedImageURL) {
            URL.revokeObjectURL(uploadedImageURL);
          }
          uploadedImageURL = URL.createObjectURL(file);
          $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
          $inputImage.val('');
        } else {
          window.alert('Please choose an image file.');
        }
      }
    });
  } else {
    $inputImage.prop('disabled', true).parent().addClass('disabled');
  }

});
</script>