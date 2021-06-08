    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('banners::banner.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#banners-banner-entry' data-href='{{guard_url('banners/banner/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($banner->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#banners-banner-entry' data-href='{{ guard_url('banners/banner') }}/{{$banner->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
              
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('banners-banner-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('banners/banner'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('banners::banner.name') !!}  [{!! $banner->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('banners::admin.banner.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>
