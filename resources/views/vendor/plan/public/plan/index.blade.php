@extends('resource.index')
@section('icon') 
<i class="pe-7s-display2"></i>
@stop
 @include('notifications') 
@section('investplan')
@include('plan::public.plan.partial.investplan', ['mode' => 'investplan'])
@stop

@section('title') 
{!! __('plan::plan.title.plandeposit') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li>{!! __('plan::plan.name') !!}</li>  
@stop

@section('list')
    @include('plan::public.plan.partial.list', ['mode' => 'list'])
@stop

