    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#company_setting" data-toggle="tab">{!! trans('company_setting::company_setting.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#company_setting-company_setting-edit'  data-load-to='#company_setting-company_setting-entry' data-datatable='#company_setting-company_setting-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#company_setting-company_setting-entry' data-href='{{guard_url('company_setting/company_setting')}}/{{$company_setting->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('company_setting-company_setting-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('company_setting/company_setting/'. $company_setting->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="company_setting">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('company_setting::company_setting.name') !!} </div>
                @include('company_setting::admin.company_setting.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>
