@extends('resource.index')
@php
$links['create'] = guard_url('faq/faq/create');
$links['search'] = guard_url('faq/faq');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('faq::faq.title.main') !!}
@stop

@section('sub.title') 
{!! __('faq::faq.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('faq/faq')!!}">{!! __('faq::faq.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('faq::faq.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$faqs->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
