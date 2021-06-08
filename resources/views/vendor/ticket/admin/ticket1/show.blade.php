    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('ticket::ticket.name') !!}</a></li>
            <div class="box-tools pull-right">
                @if($ticket->id )
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#ticket-ticket-entry' data-datatable='#ticket-ticket-list' data-href='{{ guard_url('ticket/ticket') }}/{{$ticket->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
                <a href="<?php echo guard_url('ticket_reply/ticket_reply/'.$ticket->id);?>" class="btn btn-info btn-sm">View Comments</a>
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('ticket-ticket-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('ticket/ticket'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('ticket::ticket.name') !!}  </div>
                <div class="tab-pane active" id="details">
                    @include('ticket::admin.ticket.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>
