    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('affiliate::affiliate.name') !!}</a></li>
            <div class="box-tools pull-right">
                                
                @if($affiliate->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#affiliate-affiliate-entry' data-href='{{ guard_url('affiliate/affiliate') }}/{{$affiliate->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('affiliate-affiliate-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('affiliate/affiliate'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('affiliate::affiliate.name') !!}  [{!! $affiliate->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('affiliate::admin.affiliate.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>
