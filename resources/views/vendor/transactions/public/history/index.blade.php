@extends('resource.index')
@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('transactions::history.title.historytitle').trans('transactions::history.options.transaction_type.'.$slug) !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li>{!! __('transactions::history.name') !!}</li>  
@stop

@section('list')
    @include('transactions::public.history.partial.list', ['mode' => 'list'])
@stop