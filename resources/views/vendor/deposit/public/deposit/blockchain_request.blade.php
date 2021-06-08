@extends('resource.index')
@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
Blockchain Requests
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li>{!! __('deposit::deposit.name') !!}</li>  
@stop

@section('list')
    @include('deposit::public.deposit.partial.blockchain_list', ['mode' => 'list'])
@stop

