@extends('resource.index')
@php
$links['create'] = guard_url('transactions/history/create');
$links['search'] = guard_url('transactions/history');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('transactions::history.title.main') !!}
@stop

@section('sub.title') 
{!! __('transactions::history.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('transactions/history')!!}">{!! __('transactions::history.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('transactions::history.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$histories->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
