<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('email_template::email_template.names') !!} [{!! trans('email_template::email_template.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-warning btn-sm"  data-action='NEW' data-load-to='#email_template-email_template-entry' data-href='{!!guard_url('email_template/email_template/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>
