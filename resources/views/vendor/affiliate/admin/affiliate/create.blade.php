
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Affiliate</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#affiliate-affiliate-create'  data-load-to='#affiliate-affiliate-entry' data-datatable='#affiliate-affiliate-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#affiliate-affiliate-entry' data-href='{{guard_url('affiliate/affiliate/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('affiliate-affiliate-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('affiliate/affiliate'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('affiliate::affiliate.name') !!}] </div>
                @include('affiliate::admin.affiliate.partial.entry', ['mode' => 'create'])
            </div>
            {!! Form::close() !!}
        </div>
    </div>