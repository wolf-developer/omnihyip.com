<div id="page-wrapper" style="min-height: 256px;">
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> <!--{!! trans('affiliate::affiliate.name') !!}--> <small> {!! trans('app.manage') !!} {!! trans('affiliate::affiliate.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('affiliate::affiliate.names') !!}</li>
        </ol>
    </section>
	
	    
    <div id="payment_setting-payment_setting-entry">
		<div class="nav-tabs-custom">
		   
			<!-- Nav tabs -->
			<ul class="nav nav-tabs primary">
			    
				<li class="active"><a href="#affiliate" data-toggle="tab">{!! trans('affiliate::affiliate.tab.name') !!}</a></li>
				
           
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-warning btn-sm" data-action='UPDATE' data-form='#affiliate-affiliate-edit'  data-load-to='#affiliate-affiliate-entry' data-datatable='#affiliate-affiliate-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
				<!--	<button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#affiliate-affiliate-entry' data-href='{{guard_url('affiliate/affiliate')}}/{{$affiliate->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>-->

				</div>
			</ul>
			{!!Form::vertical_open()
			->id('affiliate-affiliate-edit')
			->method('PUT')
			->enctype('multipart/form-data')
			->action(guard_url('affiliate/affiliate/'. $affiliate->getRouteKey()))!!}
			@include('notifications')
			<div class="tab-content clearfix">
				<div class="tab-pane active" id="affiliate">
					<div class="tab-pan-title">  {!! trans('affiliate::affiliate.label.manage_commission') !!} </div>
					@include('affiliate::admin.affiliate.partial.entry', ['mode' => 'edit'])
				</div>
			</div>
			{!!Form::close()!!}
		</div>
    </div>


</div>

