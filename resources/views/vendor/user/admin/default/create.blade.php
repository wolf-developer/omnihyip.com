
<div class="nav-tabs-custom">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs primary">
        <li class="active"><a href="#details" data-toggle="tab">{!! trans('user::client.name', ['client' => $type]) !!}</a></li>
        <div class="box-tools pull-right">
            <button id="clientadd" type="button" class="btn btn-warning btn-sm" data-action='CREATE' data-form='#user-client-create'  data-load-to='#user-client-entry' data-datatable='#user-client-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
            <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#user-client-entry' data-href='{{guard_url('user/' . $type . '/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
        </div>
    </ul>
    <div class="tab-content clearfix">
        {!!Form::vertical_open()
        ->id('user-' . $type . '-create')
        ->method('POST')
        ->files('true')
        ->action(guard_url('user/' . $type))!!}
        <div class="tab-pane active" id="details">
            <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('user::client.name', ['client' => $type]) !!}] </div>
            @include('user::default.partial.entry', ['mode' => 'create'])
        </div>
        {!! Form::close() !!}
    </div>
</div>
<script>
    $(document).ready(function () {
        //validate phone
        $('#clientadd').click(function () {
            var phone = $('input[name="mobile"]').val(),
                    intRegex = /[0-9 -()+]+$/;
            if ((phone.length < 10) || (phone.length > 12) || (!intRegex.test(phone)))
            {
                $('#mobilevali').html('Please enter a valid mobile number.').show();
                return false;
            } else {
                $('#mobilevali').html('').hide();
            }
        });
    });
</script>
