
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">CompanySetting</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#company_setting-company_setting-create'  data-load-to='#company_setting-company_setting-entry' data-datatable='#company_setting-company_setting-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#company_setting-company_setting-entry' data-href='{{guard_url('company_setting/company_setting/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('company_setting-company_setting-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('company_setting/company_setting'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('company_setting::company_setting.name') !!}] </div>
                @include('company_setting::admin.company_setting.partial.entry', ['mode' => 'create'])
            </div>
            {!! Form::close() !!}
        </div>
    </div>