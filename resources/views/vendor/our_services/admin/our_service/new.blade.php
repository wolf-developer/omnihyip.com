<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('our_services::our_service.names') !!} [{!! trans('our_services::our_service.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-warning btn-sm"  data-action='NEW' data-load-to='#our_services-our_service-entry' data-href='{!!guard_url('our_services/our_service/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>
