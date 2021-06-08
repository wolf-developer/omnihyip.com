    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('addons::addon.name') !!}</a></li>
            <div class="box-tools pull-right">
                @if($addon->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#addons-addon-entry' data-href='{{ guard_url('addons/addon') }}/{{$addon->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                 @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('addons-addon-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('addons/addon'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('addons::addon.name') !!}  [{!! $addon->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('addons::admin.addon.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>