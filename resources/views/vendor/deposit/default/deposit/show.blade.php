@extends('resource.show')

@php
$links['back'] = guard_url('deposit/deposit');
$links['edit'] = guard_url('deposit/deposit') . '/' . $deposit->getRouteKey() . '/edit';
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('deposit::deposit.title.main') !!}
@stop

@section('sub.title') 
{!! __('deposit::deposit.title.show') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('$deposit/deposit')!!}">{!! __('deposit::deposit.name') !!}</a></li>
  <li>{{ __('app.show') }}</li>
@stop

@section('tabs') 
@stop

@section('tools') 
    <a href="{!!guard_url('$deposit/deposit')!!}" rel="tooltip" class="btn btn-white btn-round btn-simple btn-icon pull-right add-new" data-original-title="" title="">
            <i class="fa fa-chevron-left"></i>
    </a>
@stop

@section('content') 
    @include('deposit::deposit.partial.show', ['mode' => 'show'])
@stop
