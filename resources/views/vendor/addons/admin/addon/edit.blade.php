    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#addon" data-toggle="tab">{!! trans('addons::addon.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#addons-addon-edit'  data-load-to='#addons-addon-entry' data-datatable='#addons-addon-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#addons-addon-entry' data-href='{{guard_url('addons/addon')}}/{{$addon->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('addons-addon-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('addons/addon/'. $addon->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="addon">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('addons::addon.name') !!} [{!!$addon->name!!}] </div>
                @include('addons::admin.addon.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>