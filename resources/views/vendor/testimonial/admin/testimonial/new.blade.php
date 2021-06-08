<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('testimonial::testimonial.names') !!} [{!! trans('testimonial::testimonial.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-warning btn-sm"  data-action='NEW' data-load-to='#testimonial-testimonial-entry' data-href='{!!guard_url('testimonial/testimonial/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>
