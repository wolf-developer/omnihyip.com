@extends('resource.edit')
@php
$links['back'] = guard_url('faq/faq');
$links['form'] = guard_url('faq/faq') . '/' . $faq->getRouteKey();
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('faq::faq.title.main') !!}
@stop

@section('sub.title') 
{!! __('faq::faq.title.edit') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('faq/faq')!!}">{!! __('faq::faq.name') !!}</a></li>
  <li>{{ __('app.edit') }}</li>
@stop

@section('tabs') 
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Example</li>
@stop

@section('tools') 
    <a href="{!!guard_url('faq/faq')!!}" rel="tooltip" class="btn btn-white btn-round btn-simple btn-icon pull-right add-new" data-original-title="" title="">
            <i class="fa fa-chevron-left"></i>
    </a>
@stop

@section('content') 
    @include('faq::faq.partial.entry', ['mode' => 'edit'])
@stop

@section('actions') 
<div>
    <input class="btn-large btn-primary btn" type="submit" data-action="UPDATE" data-form="form-edit" value="{{__('app.update')}}"> 
    <input class="btn-large btn-inverse btn" type="reset" value="{{__('app.reset')}}">
</div>
@stop