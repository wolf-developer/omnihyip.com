    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#banner" data-toggle="tab">{!! trans('banners::banner.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#banners-banner-edit'  data-load-to='#banners-banner-entry' data-datatable='#banners-banner-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#banners-banner-entry' data-href='{{guard_url('banners/banner')}}/{{$banner->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('banners-banner-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('banners/banner/'. $banner->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="banner">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('banners::banner.name') !!} [{!!$banner->name!!}] </div>
                @include('banners::admin.banner.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>