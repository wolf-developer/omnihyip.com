@extends('resource.index')
@php
$links['create'] = guard_url('ticket/ticket_reply/create');
$links['search'] = guard_url('ticket/ticket_reply');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('ticket::ticket_reply.title.main') !!}
@stop

@section('sub.title') 
{!! __('ticket::ticket_reply.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('ticket/ticket_reply')!!}">{!! __('ticket::ticket_reply.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('ticket::ticket_reply.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$ticket_replies->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
