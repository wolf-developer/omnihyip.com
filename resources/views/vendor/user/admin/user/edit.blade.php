
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#user" data-toggle="tab">{!! trans('user::user.tab.name') !!}</a></li>
            <li><a href="#details" data-toggle="tab">Details</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-warning btn-sm" data-action='UPDATE' data-form='#user-user-edit'  data-load-to='#user-user-entry' data-datatable='#user-user-list'><i class="fa fa-floppy-o"></i> Save</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#user-user-entry' data-href='{{trans_url('admin/user/user')}}/{{$user->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('user-user-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(trans_url('admin/user/user/'. $user->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="user">
                <div class="tab-pan-title">  {!! trans('app.edit') !!}  {!! trans('user::user.name') !!} [ {!!$user->name!!} ] </div>
                @include('user::admin.user.partial.entry')
            </div>
            <div class="tab-pane " id="details">
                <div class="row">
                    
                    <div class='col-md-3 col-sm-4'>
                            <label>Photo</label>
                        <div class='col-md-12 col-sm-12'>
                            {!!$user->files('photo')->url($user->getUploadUrl('photo'))->dropzone()!!}
                            {!!$user->files('photo')->editor()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!!Form::close()!!}
    </div>
