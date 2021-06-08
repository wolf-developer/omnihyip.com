            <div class="content">
                <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="question">
                    {!! trans('faq::faq.label.question') !!}
                </label><br />
                    {!! $faq['question'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="answer">
                    {!! trans('faq::faq.label.answer') !!}
                </label><br />
                    {!! $faq['answer'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('faq::faq.label.created_at') !!}
                </label><br />
                    {!! $faq['created_at'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('question')
                       -> label(trans('faq::faq.label.question'))
                       -> required()
                       -> placeholder(trans('faq::faq.placeholder.question'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Form::textarea('answer')
                    -> label(trans('faq::faq.label.answer'))
                    -> dataUpload(trans_url($faq->getUploadURL('answer')))
                    -> required()
                    -> addClass('html-editor')
                    -> placeholder(trans('faq::faq.placeholder.answer'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                   <div class='form-group'>
                     <label for='created_at' class='control-label'>{!!trans('faq::faq.label.created_at')!!}</label>
                     <div class='input-group pickdate'>
                        {!! Form::text('created_at')
                        -> placeholder(trans('faq::faq.placeholder.created_at'))
                        -> required()
                        ->raw()!!}
                       <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                     </div>
                   </div>
                </div>
            </div>