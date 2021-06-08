@extends('resource.index')
@php
$links['create'] = guard_url('banners/banner/create');
$links['search'] = guard_url('banners/banner');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('banners::banner.title.main') !!}
@stop

@section('sub.title') 
{!! __('banners::banner.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('banners/banner')!!}">{!! __('banners::banner.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('banners::banner.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$banners->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
