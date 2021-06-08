    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#ticket_reply" data-toggle="tab">{!! trans('ticket::ticket_reply.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#ticket-ticket_reply-edit'  data-load-to='#ticket-ticket_reply-entry' data-datatable='#ticket-ticket_reply-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#ticket-ticket_reply-entry' data-href='{{guard_url('ticket/ticket_reply')}}/{{$ticket_reply->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('ticket-ticket_reply-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('ticket/ticket_reply/'. $ticket_reply->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="ticket_reply">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('ticket::ticket_reply.name') !!} [{!!$ticket_reply->name!!}] </div>
                @include('ticket::admin.ticket_reply.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>