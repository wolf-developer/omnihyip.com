@extends('resource.index')
@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('transactions::history.send_funds') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li>{!! __('transactions::history.send_funds') !!}</li>  
@stop

@section('list')
    @include('transactions::public.history.partial.fund_form', ['mode' => 'form'])
@stop
