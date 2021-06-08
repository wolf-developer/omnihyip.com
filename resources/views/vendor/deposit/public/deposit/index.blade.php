@extends('resource.index')
@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('deposit::deposit.title.plandeposit') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li>{!! __('deposit::deposit.name') !!}</li>  
@stop

@section('list')
    @include('deposit::public.deposit.partial.list', ['mode' => 'list'])
@stop

