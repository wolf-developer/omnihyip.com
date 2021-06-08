    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#ticket" data-toggle="tab">{!! trans('ticket::ticket.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#ticket-ticket-edit'  data-load-to='#ticket-ticket-entry' data-datatable='#ticket-ticket-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#ticket-ticket-entry' data-href='{{guard_url('ticket/ticket')}}/{{$ticket->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('ticket-ticket-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('ticket/ticket/'. $ticket->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="ticket">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('ticket::ticket.name') !!} [{!!$ticket->name!!}] </div>
                @include('ticket::admin.ticket.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>