            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('ticket_code')
                       -> label(trans('ticket::ticket.label.ticket_code'))
                       -> required()
                       -> placeholder(trans('ticket::ticket.placeholder.ticket_code'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('ticket_subject')
                       -> label(trans('ticket::ticket.label.ticket_subject'))
                       -> required()
                       -> placeholder(trans('ticket::ticket.placeholder.ticket_subject'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Form::textarea('ticket_body')
                    -> label(trans('ticket::ticket.label.ticket_body'))
                    -> dataUpload(trans_url($ticket->getUploadURL('ticket_body')))
                    -> addClass('html-editor')
                    -> placeholder(trans('ticket::ticket.placeholder.ticket_body'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('ticket_status')
                    -> options(trans('ticket::ticket.options.ticket_status'))
                    -> label(trans('ticket::ticket.label.ticket_status'))
                    -> required()
                    -> placeholder(trans('ticket::ticket.placeholder.ticket_status'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('ticket_user')
                       -> label(trans('ticket::ticket.label.ticket_user'))
                       -> required()
                       -> placeholder(trans('ticket::ticket.placeholder.ticket_user'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('ticket_priority')
                    -> options(trans('ticket::ticket.options.ticket_priority'))
                    -> label(trans('ticket::ticket.label.ticket_priority'))
                    -> required()
                    -> placeholder(trans('ticket::ticket.placeholder.ticket_priority'))!!}
               </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="file" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('ticket::ticket.label.ticket_file') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $ticket->files('file')
                            ->mime(config('filer.allowed_extensions'))
                            ->url($ticket->getUploadUrl('file'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $ticket
                            ->files('file')
                            ->editor()!!}
                        </div>
                    </div>
                </div>
                <div class='col-md-12'>
                    {!! Form::textarea('ticket_comment')
                    -> label(trans('ticket::ticket.label.ticket_comment'))
                    -> dataUpload(trans_url($ticket->getUploadURL('ticket_comment')))
                    -> addClass('html-editor')
                    -> placeholder(trans('ticket::ticket.placeholder.ticket_comment'))!!}
                </div>
            </div>