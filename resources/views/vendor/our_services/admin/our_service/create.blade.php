
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">OurService</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-warning btn-sm" data-action='CREATE' data-form='#our_services-our_service-create'  data-load-to='#our_services-our_service-entry' data-datatable='#our_services-our_service-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#our_services-our_service-entry' data-href='{{guard_url('our_services/our_service/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('our_services-our_service-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('our_services/our_service'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('our_services::our_service.name') !!}] </div>
                @include('our_services::admin.our_service.partial.entry', ['mode' => 'create'])
            </div>
            {!! Form::close() !!}
        </div>
    </div>
