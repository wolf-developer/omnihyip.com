<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('ticket::ticket_reply.names') !!} [{!! trans('ticket::ticket_reply.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#ticket-ticket_reply-entry' data-href='{!!guard_url('ticket/ticket_reply/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>