            @include('email_template::public.email_template.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('email_template::public.email_template.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($email_template->defaultImage('images' , 'xl'))!!}" alt="{{$email_template->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="subject">
                    {!! trans('email_template::email_template.label.subject') !!}
                </label><br />
                    {!! $email_template['subject'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="body">
                    {!! trans('email_template::email_template.label.body') !!}
                </label><br />
                    {!! $email_template['body'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



