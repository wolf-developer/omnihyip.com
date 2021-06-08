    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#email_template" data-toggle="tab">{!! trans('email_template::email_template.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#email_template-email_template-edit'  data-load-to='#email_template-email_template-entry' data-datatable='#email_template-email_template-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#email_template-email_template-entry' data-href='{{guard_url('email_template/email_template')}}/{{$email_template->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('email_template-email_template-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('email_template/email_template/'. $email_template->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="email_template">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('email_template::email_template.name') !!} [{!!$email_template->name!!}] </div>
                @include('email_template::admin.email_template.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>