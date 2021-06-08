<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('company_setting::company_setting.names') !!} [{!! trans('company_setting::company_setting.text.preview') !!}]</h3>
        
        
        <div class="box-tools pull-right hidden">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#company_setting-company_setting-entry' data-href='{!!guard_url('company_setting/company_setting/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
        
    </div>
</div>