@extends('resource.index')
@php
$links['create'] = guard_url('ticket/ticket/create');
$links['search'] = guard_url('ticket/ticket');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('ticket::ticket.title.main') !!}
@stop

@section('sub.title') 
{!! __('ticket::ticket.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('ticket/ticket')!!}">{!! __('ticket::ticket.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('ticket::ticket.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$tickets->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
