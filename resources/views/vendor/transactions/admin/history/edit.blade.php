    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#history" data-toggle="tab">{!! trans('transactions::history.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#transactions-history-edit'  data-load-to='#transactions-history-entry' data-datatable='#transactions-history-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#transactions-history-entry' data-href='{{guard_url('transactions/history')}}/{{$history->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('transactions-history-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('transactions/history/'. $history->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="history">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('transactions::history.name') !!} [{!!$history->name!!}] </div>
                @include('transactions::admin.history.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>