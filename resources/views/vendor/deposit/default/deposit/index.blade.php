@extends('resource.index')
@php
$links['create'] = guard_url('deposit/deposit/create');
$links['search'] = guard_url('deposit/deposit');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('deposit::deposit.title.main') !!}
@stop

@section('sub.title') 
{!! __('deposit::deposit.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('deposit/deposit')!!}">{!! __('deposit::deposit.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('deposit::deposit.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$deposits->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
