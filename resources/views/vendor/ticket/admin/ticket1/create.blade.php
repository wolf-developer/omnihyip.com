
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Ticket</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#ticket-ticket-create'  data-load-to='#ticket-ticket-entry' data-datatable='#ticket-ticket-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#ticket-ticket-entry' data-href='{{guard_url('ticket/ticket/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('ticket-ticket-create')
            ->enctype('multipart/form-data')
            ->method('POST')
            ->files('true')
            ->action(guard_url('ticket/ticket'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('ticket::ticket.name') !!}] </div>
                @include('ticket::admin.ticket.partial.entry', ['mode' => 'create'])
            </div>
            {!! Form::close() !!}
        </div>
    </div>
