    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#deposit" data-toggle="tab">{!! trans('deposit::deposit.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#deposit-deposit-edit'  data-load-to='#deposit-deposit-entry' data-datatable='#deposit-deposit-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#deposit-deposit-entry' data-href='{{guard_url('deposit/deposit')}}/{{$deposit->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('deposit-deposit-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('deposit/deposit/'. $deposit->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="deposit">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('deposit::deposit.name') !!} [{!!$deposit->name!!}] </div>
                @include('deposit::admin.deposit.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>