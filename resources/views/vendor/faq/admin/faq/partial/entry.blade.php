            <div class='row'>
                <div class='col-md-4 col-sm-6 cpp tags'>
                       {!! Form::text('question')
                       -> label(trans('faq::faq.label.question'))
                       -> required()
                       -> placeholder(trans('faq::faq.placeholder.question'))!!}
                </div>

                <div class='col-md-12 cpp tags'>
                    {!! Form::textarea('answer')
                    -> label(trans('faq::faq.label.answer'))
                    -> dataUpload(trans_url($faq->getUploadURL('answer')))
                    -> required()
                    -> placeholder(trans('faq::faq.placeholder.answer'))!!}
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
