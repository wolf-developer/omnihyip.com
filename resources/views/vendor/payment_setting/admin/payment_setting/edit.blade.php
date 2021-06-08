@include('notifications')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('payment_setting::payment_setting.name') !!} <!--<small> {!! trans('app.manage') !!} {!! trans('payment_setting::payment_setting.names') !!}</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('payment_setting::payment_setting.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='payment_setting-payment_setting-entry'>
<div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#payment_setting" data-toggle="tab">Deposit {!! trans('payment_setting::payment_setting.tab.name') !!}</a></li>
            <li class=""><a href="#withdraw_payment_setting" data-toggle="tab">Withdraw {!! trans('payment_setting::payment_setting.tab.name') !!}</a></li>
            
        </ul>
        
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="payment_setting">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('payment_setting::payment_setting.name') !!} </div>
                @include('payment_setting::admin.payment_setting.partial.entry', ['mode' => 'edit'])
            </div>
            <div class="tab-pane" id="withdraw_payment_setting">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('payment_setting::payment_setting.name') !!} </div>
                @include('payment_setting::admin.payment_setting.partial.withdraw_entry', ['mode' => 'edit'])
            </div>
        </div>
    </div>
    </div>
    </section>
</div>
