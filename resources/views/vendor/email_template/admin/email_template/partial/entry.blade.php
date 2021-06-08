            <div class='row'>
                <div class='col-md-12 col-sm-12'>
                       {!! Form::text('subject')
                       -> label(trans('email_template::email_template.label.subject'))
                       -> required()
                       -> placeholder(trans('email_template::email_template.placeholder.subject'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Form::textarea('body')
                    -> label(trans('email_template::email_template.label.body'))
                    -> dataUpload(trans_url($email_template->getUploadURL('body')))
                    -> required()
                    -> addClass('html-editor')
                    -> placeholder(trans('email_template::email_template.placeholder.body'))!!}
                </div>
            </div>