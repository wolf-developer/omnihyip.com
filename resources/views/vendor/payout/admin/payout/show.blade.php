    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('payout::payout.name') !!}</a></li>
            <div class="box-tools pull-right">    @if($payout->id )
                <button type="button" class="btn btn-warning btn-sm" data-action="EDIT" data-load-to='#payout-payout-entry' data-href='{{ guard_url('payout/payout') }}/{{$payout->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('payout-payout-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('payout/payout'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('payout::payout.name') !!}  [{!! $payout->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('payout::admin.payout.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>
