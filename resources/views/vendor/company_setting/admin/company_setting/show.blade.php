    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('company_setting::company_setting.name') !!}</a></li>
            <div class="box-tools pull-right">
                                
                @if($company_setting->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#company_setting-company_setting-entry' data-href='{{ guard_url('company_setting/company_setting') }}/{{$company_setting->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('company_setting-company_setting-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('company_setting/company_setting'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('company_setting::company_setting.name') !!}   </div>
                <div class="tab-pane active" id="details">
                    @include('company_setting::admin.company_setting.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>