    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('email_template::email_template.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#email_template-email_template-entry' data-href='{{guard_url('email_template/email_template/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($email_template->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#email_template-email_template-entry' data-href='{{ guard_url('email_template/email_template') }}/{{$email_template->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
<!--                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#email_template-email_template-entry' data-datatable='#email_template-email_template-list' data-href='{{ guard_url('email_template/email_template') }}/{{$email_template->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>-->
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('email_template-email_template-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('email_template/email_template'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('email_template::email_template.name') !!}  [{!! $email_template->subject !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('email_template::admin.email_template.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>