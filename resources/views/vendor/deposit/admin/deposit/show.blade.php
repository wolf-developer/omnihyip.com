    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  Deposit Detail</a></li>
            <div class="box-tools pull-right">
                               
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('deposit-deposit-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('deposit/deposit'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }} Deposit</div>
                <div class="tab-pane active" id="details">
                    @include('deposit::admin.deposit.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>
