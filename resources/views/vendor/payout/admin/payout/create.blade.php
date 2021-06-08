
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Payout</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#payout-payout-create'  data-load-to='#payout-payout-entry' data-datatable='#payout-payout-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#payout-payout-entry' data-href='{{guard_url('payout/payout/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('payout-payout-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('payout/payout'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('payout::payout.name') !!}] </div>
                @include('payout::admin.payout.partial.entry', ['mode' => 'create'])
            </div>
            {!! Form::close() !!}
        </div>
    </div>