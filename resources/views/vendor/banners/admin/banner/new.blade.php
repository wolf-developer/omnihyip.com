<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('banners::banner.names') !!} [{!! trans('banners::banner.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-warning btn-sm"  data-action='NEW' data-load-to='#banners-banner-entry' data-href='{!!guard_url('banners/banner/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>
