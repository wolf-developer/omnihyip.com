
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">PaymentSetting</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-warning btn-sm" data-action='CREATE' data-form='#payment_setting-payment_setting-create'  data-load-to='#payment_setting-payment_setting-entry' data-datatable='#payment_setting-payment_setting-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#payment_setting-payment_setting-entry' data-href='{{guard_url('payment_setting/payment_setting/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('payment_setting-payment_setting-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('payment_setting/payment_setting'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('payment_setting::payment_setting.name') !!}] </div>
                @include('payment_setting::admin.payment_setting.partial.entry', ['mode' => 'create'])
            </div>
            {!! Form::close() !!}
        </div>
    </div>
