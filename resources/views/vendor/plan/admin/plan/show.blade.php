    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('plan::plan.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-default btn-sm" data-action='NEW' data-load-to='#plan-plan-entry' data-href='{{guard_url('plan/plan/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($plan->id )
                <button type="button" class="btn btn-warning btn-sm" data-action="EDIT" data-load-to='#plan-plan-entry' data-href='{{ guard_url('plan/plan') }}/{{$plan->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#plan-plan-entry' data-datatable='#plan-plan-list' data-href='{{ guard_url('plan/plan') }}/{{$plan->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('plan-plan-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('plan/plan'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('plan::plan.name') !!}  [{!! $plan->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('plan::admin.plan.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>
