            <div class='row'>
                <div class='col-md-4 col-sm-6 cpp tags'>
                       {!! Form::text('client_name')
                       -> label(trans('testimonial::testimonial.label.client_name'))
					   -> required()
                       -> placeholder(trans('testimonial::testimonial.placeholder.client_name'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::select('status')
                    -> options(trans('testimonial::testimonial.options.status'))
                    -> label(trans('testimonial::testimonial.label.status'))
                    -> required()
                    -> placeholder(trans('testimonial::testimonial.placeholder.status'))!!}
                </div>

                <div class='col-md-8 col-sm-6 cpp tags'>
                       {!! Form::textarea('client_msg')
                       -> label(trans('testimonial::testimonial.label.client_msg'))
                       -> required()
                       -> placeholder(trans('testimonial::testimonial.placeholder.client_msg'))!!}
                </div>

                <div class='col-md-8 col-sm-8'>
                    <div class="form-group">
                        <label for="image" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('testimonial::testimonial.label.image') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $testimonial->files('image')
                            ->url($testimonial->getUploadUrl('image'))
                            ->mime(config('filer.image_extensions'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                        {!! $testimonial->files('image')
                        ->editor()!!}
                        </div>
                        
                    </div>
                </div>
            </div>
<script>
   $(document).ready(function () {
            $("#client_name, #client_msg").on('keypress', function (event) {
                var regex = new RegExp("^[a-zA-Z0-9_ ]*$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                    event.preventDefault();
                    alert("Please enter valid data");
                    return false;
                }
            });
        });
</script>
<script>
$(document).ready(function(){

    $('.cpp').on("cut copy paste",function(e) {
        e.preventDefault();
        alert("You cannot copy and paste into this text field.");
    });

    $('.tags').on("keydown", function(e){
        if (e.shiftKey && (e.which == 188 || e.which == 190)) {
        e.preventDefault();
        alert("You cannot add tags in the field.");
        }
    });
});
</script>

