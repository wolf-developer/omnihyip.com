            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('ticket_id')
                       -> label(trans('ticket::ticket_reply.label.ticket_id'))
                       -> required()
                       -> placeholder(trans('ticket::ticket_reply.placeholder.ticket_id'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Form::textarea('body')
                    -> label(trans('ticket::ticket_reply.label.body'))
                    -> dataUpload(trans_url($ticket_reply->getUploadURL('body')))
                    -> required()
                    -> addClass('html-editor')
                    -> placeholder(trans('ticket::ticket_reply.placeholder.body'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('replier_id')
                       -> label(trans('ticket::ticket_reply.label.replier_id'))
                       -> required()
                       -> placeholder(trans('ticket::ticket_reply.placeholder.replier_id'))!!}
                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="file" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('ticket::ticket_reply.label.attachment') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $ticket_reply->files('file')
                            ->mime(config('filer.allowed_extensions'))
                            ->url($ticket_reply->getUploadUrl('file'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $ticket_reply
                            ->files('file')
                            ->editor()!!}
                        </div>
                    </div>
                </div>
            </div>