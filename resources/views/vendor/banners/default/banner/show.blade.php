@extends('resource.show')

@php
$links['back'] = guard_url('banners/banner');
$links['edit'] = guard_url('banners/banner') . '/' . $banner->getRouteKey() . '/edit';
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('banners::banner.title.main') !!}
@stop

@section('sub.title') 
{!! __('banners::banner.title.show') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('$banners/banner')!!}">{!! __('banners::banner.name') !!}</a></li>
  <li>{{ __('app.show') }}</li>
@stop

@section('tabs') 
@stop

@section('tools') 
    <a href="{!!guard_url('$banners/banner')!!}" rel="tooltip" class="btn btn-white btn-round btn-simple btn-icon pull-right add-new" data-original-title="" title="">
            <i class="fa fa-chevron-left"></i>
    </a>
@stop

@section('content') 
    @include('banners::banner.partial.show', ['mode' => 'show'])
@stop
