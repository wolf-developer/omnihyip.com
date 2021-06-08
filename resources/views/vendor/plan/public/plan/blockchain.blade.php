@extends('resource.index')
@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('list')
@include('plan::public.plan.partial.blockchain', ['mode' => 'investplan'])
@stop


