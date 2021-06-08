    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('our_services::our_service.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-default btn-sm" data-action='NEW' data-load-to='#our_services-our_service-entry' data-href='{{guard_url('our_services/our_service/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($our_service->id )
                <button type="button" class="btn btn-warning btn-sm" data-action="EDIT" data-load-to='#our_services-our_service-entry' data-href='{{ guard_url('our_services/our_service') }}/{{$our_service->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#our_services-our_service-entry' data-datatable='#our_services-our_service-list' data-href='{{ guard_url('our_services/our_service') }}/{{$our_service->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('our_services-our_service-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('our_services/our_service'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('our_services::our_service.name') !!}  [{!! $our_service->title !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('our_services::admin.our_service.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>
