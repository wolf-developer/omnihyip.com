<div id="page-wrapper" style="min-height: 256px;">
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('payout::payout.name') !!} <small> {!! trans('app.manage') !!} {!! trans('payout::payout.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('payout::payout.names') !!}</li>
        </ol>
    </section>
	
	    
    <div id="payment_setting-payment_setting-entry">

    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#payout" data-toggle="tab">{!! trans('payout::payout.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-warning btn-sm" data-action='UPDATE' data-form='#payout-payout-edit'  data-load-to='#payout-payout-entry' data-datatable='#payout-payout-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('payout-payout-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('payout/payout/'. $payout->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="payout">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('payout::payout.name') !!} [{!!$payout->name!!}] </div>
                @include('payout::admin.payout.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>
     </div>
      </div>
