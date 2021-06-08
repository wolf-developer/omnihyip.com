<!-- @include('ticket::public.ticket_reply.partial.header') -->
<section class="grid main_grid_area">

    <div class="row">
        <!-- <div class="col-md-3">
            @include('ticket::public.ticket_reply.partial.aside')
        </div> -->

        <div class="col-md-12">

            <div class="tickets_headings">
                <div class="left_t_content">Ticket Description</div>
            </div>

            <div class="card">
                <div class="content card-block">

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="ticket_code">
                                    {!! trans('ticket::ticket.label.ticket_code') !!}
                                </label><br />
                                {!! $ticket->ticket_code !!}
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="ticket_status">
                                    {!! trans('ticket::ticket.label.ticket_status') !!}
                                </label><br />
                                {!! trans('ticket::ticket.options.ticket_status.'.$ticket->ticket_status) !!}
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="ticket_priority">
                                    {!! trans('ticket::ticket.label.ticket_priority') !!}
                                </label><br />
                                {!! trans('ticket::ticket.options.ticket_priority.'.$ticket->ticket_priority) !!}
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="ticket_subject">
                                    {!! trans('ticket::ticket.label.ticket_subject') !!}
                                </label><br />
                                {!! $ticket->ticket_subject !!}
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="ticket_body">
                                    {!! trans('ticket::ticket.label.ticket_body') !!}
                                </label><br />
                                {!! $ticket->ticket_body !!}
                            </div>
                        </div>


                    </div>
                    @if($ticket->ticket_status!=4)
                    <h3 class="add_comments">Add Comment</h3>
                    <div class="row">
                        {!!Form::vertical_open()
                        ->id('ticket-reply')
                        ->enctype('multipart/form-data')
                        ->method('POST')
                        ->files('true')
                        ->action(guard_url('ticket/submit_reply'))!!}

                        {!! Form::hidden('ticket_id')
                        ->id('ticket_user')
                        -> forceValue($ticket->id)!!}
                        {!! Form::hidden('replier_id')
                        ->id('replier_id')
                        -> forceValue(user_id())!!}	
                        {!! Form::hidden('current_ticket_status')
                        ->id('current_ticket_status')
                        -> forceValue($ticket->ticket_status)!!}	
                        <div class='col-md-4 col-sm-6 cp tags'>
                            {!! Form::select('ticket_status')
                            -> options(trans('ticket::ticket.options.ticket_status'))
                            -> label(trans('ticket::ticket.label.ticket_status'))
                            -> required()
                            -> forceValue($ticket->ticket_status)
                            -> placeholder(trans('ticket::ticket.placeholder.ticket_status'))!!}
                        </div>


                        <div class='col-md-12 cp tags'>
                            {!! Form::textarea('body')
                            -> label(trans('ticket::ticket_reply.label.body'))
                            -> required()
                            -> placeholder(trans('ticket::ticket_reply.placeholder.body'))!!}
                        </div>
                        <div class='col-md-12'>
                            {!! Form::submit('Submit')
                            -> addClass('btn theme-btn btn-block width_auto')!!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                    @endif
                    <h3 class="add_comments comment_sec_heading">Comment Section</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-area parent-border list-item author_area">
                                @if($ticket_replies)
                                <?php $status_changed=0;?>
                                @foreach($ticket_replies as $ticket_reply)
                                <div class="item border">
                                    <div class="content">                                       
                                        <div class="metas mt20">
                                            <div class="tag pull-left">
                                                @if($status_changed==0)
                                                {{ ($ticket_reply['user_type']=='App\Client')? 'Me : ' : 'Admin : ' }}
                                                
                                            </div>
                                            <div class="date-time pull-right">

                                                <span><i class="fa fa-calendar"></i>{{format_date_time($ticket_reply['created_at'])}}</span>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="divider"></div>
                                        <div class="author">
                                            {{$ticket_reply['body']}}
                                        </div>
                                    </div>
                                </div>
<?php $status_changed=$ticket_reply['ticket_status_changed'];?>

                                @endforeach
                                @else
                                <div>No record</div>
                                @endif
                            </div>
                        </div>
                        <div class="pagination text-center">
                            {{ $ticket_replies->links() }}
                        </div>
                    </div>
                </div>
            </div>

            </section> 
