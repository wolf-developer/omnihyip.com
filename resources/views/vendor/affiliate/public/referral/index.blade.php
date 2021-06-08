@extends('resource.index')
@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('affiliate::affiliate.title.referral') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li>{!! __('affiliate::affiliate.referralname') !!}</li>  
@stop

@section('list')
<?php
$user_referral = user_referral(array(user()->id));

?>
  <div class="panel-body reffral_link">
    <!-- Traffic sources -->
    <div class="col-md-12">		
		<label>Referral Link : </label> {{url('/client/register/'.user()->referral_code)}}		<br>
		<label>Share Links on : </label>
		<a href="javascript:void(0)" target="_blank" title="Share on Facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('{{url('/client/register/'.user()->referral_code)}}') + '&amp;t=' + encodeURIComponent('{{url('/client/register/'.user()->referral_code)}}')); return false;" class="rtte"><img src="{{asset('public/assets/img/facebook.png')}}" style="width: 20px;"></a>
          <a href="javascript:void(0)" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent('{{url('/client/register/'.user()->referral_code)}}')+'&amp;text=Please register on this site and start earned profit'); return false;" class="rtte"><img src="{{asset('public/assets/img/twitter.png')}}" style="width: 20px;"></a> </br>
        <br>
		
		
		<label>Total Referral Commission($) : </label> {{number_format($total_amount_referrals, 2, '.', '')}}		<br>
                <label>Total Referrals : </label> {{$user_referral['ref_count']}}		<br><br>
		
				
    </div>
    <?php $refer=getCompanyinfo('maxreferral');
    ?>
    <ul class="nav nav-tabs tabs-bordered">
		<?php 
		$i=1;
		for($i=1; $i<=$refer; $i++){
		 
		?>
		@if($i==1)
    <li class="active">
		@else
			<li>
				@endif
		<a data-toggle="tab" href="#ref_level_{{ $i }}">Referral Level {{ $i }}</a></li>
  
  <?php } ?>
  <?php  $i++; ?>
    <br>
    @include('affiliate::public.referral.list')
</div>
@stop
