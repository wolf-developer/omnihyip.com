    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('transactions::history.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <!--button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#transactions-history-entry' data-href='{{guard_url('transactions/history/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($history->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#transactions-history-entry' data-href='{{ guard_url('transactions/history') }}/{{$history->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#transactions-history-entry' data-datatable='#transactions-history-list' data-href='{{ guard_url('transactions/history') }}/{{$history->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif-->
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('transactions-history-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('transactions/history'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('transactions::history.name') !!}  [{!! $history->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('transactions::admin.history.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>
