
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs primary">
        <li class="active"><a href="#profile" data-toggle="tab">  {!! trans('user::user.name') !!}</a></li>
        <li><a href="#details" data-toggle="tab">Details</a></li>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-default btn-sm" data-action='NEW' data-load-to='#user-user-entry' data-href='{{guard_url('user/user/create')}}'><i class="fa fa-plus-circle"></i> New</button>
            @if($user->id )
            <button type="button" class="btn btn-warning btn-sm" data-action="EDIT" data-load-to='#user-user-entry' data-href='{{ guard_url('user/user') }}/{{$user->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> Edit</button>
            <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#user-user-entry' data-datatable='#user-user-list' data-href='{{ guard_url('user/user') }}/{{$user->getRouteKey()}}' >
            <i class="fa fa-times-circle"></i> Delete
            </button>
            @endif
        </div>
    </ul>
    {!!Form::vertical_open()
    ->id('user-user-show')
    ->method('POST')
    ->files('true')
    ->action(guard_url('user/user'))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="profile">
                <div class="tab-pan-title">  {!! trans('app.view') !!}  {!! trans('user::user.name') !!} [ {!!$user->name!!} ] </div>
                @include('user::admin.user.partial.entry')
            </div>
            <div class="tab-pane " id="details">
                <div class="row disabled">
                   

                    
                    <div class='col-md-3 col-sm-4'>
                        <div class='col-md-12 col-sm-12'>
                           {!!@$user->files('photo')!!}
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
</div>
