@extends('resource.index')
@php
$links['create'] = guard_url('plan/plan/create');
$links['search'] = guard_url('plan/plan');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('plan::plan.title.main') !!}
@stop

@section('sub.title') 
{!! __('plan::plan.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('plan/plan')!!}">{!! __('plan::plan.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('plan::plan.partial.list.list', ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$plans->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
