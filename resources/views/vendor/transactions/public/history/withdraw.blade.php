@extends('resource.index')
@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('transactions::history.title.withdrawtitle') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li>{!! __('transactions::history.withdrawname') !!}</li>  
@stop

@section('list')
    @include('transactions::public.history.partial.withdraw_form', ['mode' => 'form'])
@stop
