
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#profile" data-toggle="tab">Contact</a></li>
            <li><a href="#details" data-toggle="tab">Details</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-warning btn-sm" data-action='CREATE' data-form='#user-user-create'  data-load-to='#user-user-entry' data-datatable='#user-user-list'><i class="fa fa-floppy-o"></i> Save</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#user-user-entry' data-href='{{trans_url('admin/user/user/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('user-user-create')
        ->method('POST')
        ->files('true')
        ->action(trans_url('admin/user/user'))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="profile">
                <div class="tab-pan-title">  {!! trans('app.create') !!}  {!! trans('user::user.name') !!} </div>
                @include('user::admin.user.partial.entry')
            </div>
            <div class="tab-pane " id="details">
                <div class="row">
                    
                    <div class='col-md-3 col-sm-4'>
                    <label>Photo</label>
                        <div class='col-md-12 col-sm-12'>
                           {!!@$user->files('photo')
                           ->url($user->getUploadUrl('photo'))
                           ->dropzone()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
