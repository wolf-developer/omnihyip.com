
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Banner</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-warning btn-sm" data-action='CREATE' data-form='#banners-banner-create'  data-load-to='#banners-banner-entry' data-datatable='#banners-banner-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#banners-banner-entry' data-href='{{guard_url('banners/banner/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('banners-banner-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('banners/banner'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('banners::banner.name') !!}] </div>
                @include('banners::admin.banner.partial.entry', ['mode' => 'create'])
            </div>
            {!! Form::close() !!}
        </div>
    </div>
