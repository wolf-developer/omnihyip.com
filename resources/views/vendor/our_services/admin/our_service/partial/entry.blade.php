            <div class='row'>
                <div class='col-md-4 col-sm-6 cpp tags'>
                       {!! Form::text('title')
                       -> label(trans('our_services::our_service.label.title'))
                       -> required()
                       -> placeholder(trans('our_services::our_service.placeholder.title'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Form::textarea('detail')
                    -> label(trans('our_services::our_service.label.detail'))
                    -> dataUpload(trans_url($our_service->getUploadURL('detail')))
                    -> required()
                    -> addClass('html-editor')
                    -> placeholder(trans('our_services::our_service.placeholder.detail'))!!}
                </div>
                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="image" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('our_services::our_service.label.image') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $our_service->files('image')
                            ->url($our_service->getUploadUrl('image'))
                            ->mime(config('filer.image_extensions'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                        {!! $our_service->files('image')
                        ->editor()!!}
                        </div>
                    </div>
                </div>
            </div>
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