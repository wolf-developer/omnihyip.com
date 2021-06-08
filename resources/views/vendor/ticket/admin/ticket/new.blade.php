<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('ticket::ticket.names') !!} [{!! trans('ticket::ticket.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#ticket-ticket-entry' data-href='{!!guard_url('ticket/ticket/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>