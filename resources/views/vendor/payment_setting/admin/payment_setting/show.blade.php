    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('payment_setting::payment_setting.name') !!}</a></li>
            <div class="box-tools pull-right">
                                
                @if($payment_setting->id )
                <button type="button" class="btn btn-warning btn-sm" data-action="EDIT" data-load-to='#payment_setting-payment_setting-entry' data-href='{{ guard_url('payment_setting/payment_setting') }}/{{$payment_setting->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('payment_setting-payment_setting-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('payment_setting/payment_setting'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title">{{ trans('app.view') }}   {!! trans('payment_setting::payment_setting.name') !!} </div>
                <div class="tab-pane active" id="details">
                    @include('payment_setting::admin.payment_setting.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>
