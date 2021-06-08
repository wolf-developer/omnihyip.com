@extends('resource.show')

@php
$links['back'] = guard_url('ticket/ticket_reply');
$links['edit'] = guard_url('ticket/ticket_reply') . '/' . $ticket_reply->getRouteKey() . '/edit';
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('ticket::ticket_reply.title.main') !!}
@stop

@section('sub.title') 
{!! __('ticket::ticket_reply.title.show') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('$ticket/ticket_reply')!!}">{!! __('ticket::ticket_reply.name') !!}</a></li>
  <li>{{ __('app.show') }}</li>
@stop

@section('tabs') 
@stop

@section('tools') 
    <a href="{!!guard_url('$ticket/ticket_reply')!!}" rel="tooltip" class="btn btn-white btn-round btn-simple btn-icon pull-right add-new" data-original-title="" title="">
            <i class="fa fa-chevron-left"></i>
    </a>
@stop

@section('content') 
    @include('ticket::ticket_reply.partial.show', ['mode' => 'show'])
@stop
