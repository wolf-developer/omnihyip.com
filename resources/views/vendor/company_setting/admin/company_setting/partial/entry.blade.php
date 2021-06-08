<?php $range_arr=range(1,5);
$range = array();
foreach($range_arr as $num){
	$range[$num]=$num;
}


$prange_arr =range(0,1);
$prange = array();
foreach($prange_arr as $num){
	$prange[$num]=$num;
}
?>
<div class='row'>
    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('company_name')
        -> label(trans('company_setting::company_setting.label.company_name'))
        -> required()
        -> placeholder(trans('company_setting::company_setting.placeholder.company_name'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('company_legal_name')
        -> label(trans('company_setting::company_setting.label.company_legal_name'))
        -> required()
        -> placeholder(trans('company_setting::company_setting.placeholder.company_legal_name'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::date('company_start')
        -> label(trans('company_setting::company_setting.label.company_start'))
        -> required()
        -> placeholder(trans('company_setting::company_setting.placeholder.company_start'))!!}
    </div>
    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('total_deposit')
        -> label(trans('Total Deposit'))
        -> placeholder(trans('Total Deposit'))!!}
    </div>
    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('total_withdrawal')
        -> label(trans('Total Withdrawal'))
        -> placeholder(trans('Total Withdrawal'))!!}
    </div>
    
    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('total_client')
        -> label(trans('Total Client'))
        -> placeholder(trans('Total Client'))!!}
    </div>
    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::phone('contact_person')
        -> label(trans('company_setting::company_setting.label.contact_person'))
        -> required()
        -> placeholder(trans('company_setting::company_setting.placeholder.contact_person'))!!}
    </div>
  <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('google_site_key')
        -> label(trans('company_setting::company_setting.label.google_site_key'))
        -> placeholder(trans('company_setting::company_setting.placeholder.google_site_key'))!!}
    </div>
      <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('google_secret_key')
        -> label(trans('company_setting::company_setting.label.google_secret_key'))
        -> placeholder(trans('company_setting::company_setting.placeholder.google_secret_key'))!!}
    </div>
    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('company_address')
        -> label(trans('company_setting::company_setting.label.company_address'))
        -> placeholder(trans('company_setting::company_setting.placeholder.company_address'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('company_country')
        -> label(trans('company_setting::company_setting.label.company_country'))
        -> placeholder(trans('company_setting::company_setting.placeholder.company_country'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('company_city')
        -> label(trans('company_setting::company_setting.label.company_city'))
        -> placeholder(trans('company_setting::company_setting.placeholder.company_city'))!!}
    </div>
    
    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('company_map')
        -> label(trans('company_setting::company_setting.label.company_map'))
        -> placeholder(trans('company_setting::company_setting.placeholder.company_map'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('company_zip_code')
        -> label(trans('company_setting::company_setting.label.company_zip_code'))
        -> placeholder(trans('company_setting::company_setting.placeholder.company_zip_code'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::tel('company_phone')
        -> label(trans('company_setting::company_setting.label.company_phone'))
        -> placeholder(trans('company_setting::company_setting.placeholder.company_phone'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::email('company_email')
        -> label(trans('company_setting::company_setting.label.company_email'))
        -> placeholder(trans('company_setting::company_setting.placeholder.company_email'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::url('company_domain')
        -> label(trans('company_setting::company_setting.label.company_domain'))
        -> placeholder(trans('company_setting::company_setting.placeholder.company_domain'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::url('facebook_link')
        -> label(trans('company_setting::company_setting.label.facebook_link'))
        -> placeholder(trans('company_setting::company_setting.placeholder.facebook_link'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::url('twitter_link')
        -> label(trans('company_setting::company_setting.label.twitter_link'))
        -> placeholder(trans('company_setting::company_setting.placeholder.twitter_link'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::url('instagram_link')
        -> label(trans('company_setting::company_setting.label.instagram_link'))
        -> placeholder(trans('company_setting::company_setting.placeholder.instagram_link'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('seo_title')
        -> label(trans('company_setting::company_setting.label.seo_title'))
        -> placeholder(trans('company_setting::company_setting.placeholder.seo_title'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('meta_data')
        -> label(trans('company_setting::company_setting.label.meta_data'))
        -> placeholder(trans('company_setting::company_setting.placeholder.meta_data'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('google_analytic_code')
        -> label(trans('company_setting::company_setting.label.google_analytic_code'))
        -> placeholder(trans('company_setting::company_setting.placeholder.google_analytic_code'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::text('google_webmaster_tool_code')
        -> label(trans('company_setting::company_setting.label.google_webmaster_tool_code'))
        -> placeholder(trans('company_setting::company_setting.placeholder.google_webmaster_tool_code'))!!}
    </div>
    
   <div class='col-md-4 col-sm-6'>
        {!! Form::select('maxreferral')
        -> options($range)
        -> label(trans('company_setting::company_setting.label.maxreferral'))
       
        -> placeholder(trans('company_setting::company_setting.placeholder.maxreferral'))!!}
    </div>
    
     <div class='col-md-4 col-sm-6'>
        {!! Form::select('paypay_status')
        -> options($prange)
        -> label(trans('Paypal status'))
       
        -> placeholder(trans('Paypal status'))!!}
    </div>

   

    <div class='col-md-4 col-sm-6'>
        <div class='admmm1'>
           <label for="" class="control-label">{!! trans('company_setting::company_setting.label.captcha_client_reg') !!}</label>                   
           <input class="field" {{($company_setting->captcha_client_reg==1)?'checked':''}} name="captcha_client_reg" type="checkbox" value="1">
        </div>    
        <div class='admmm2'>
           <label for="" class="control-label">{!! trans('company_setting::company_setting.label.captcha_client_login') !!}</label>                   
           <input class="field" {{($company_setting->captcha_client_login==1)?'checked':''}} name="captcha_client_login" type="checkbox" value="1">
          </div>
         <div class='admmm'>
            <label for="" class="control-label">{!! trans('company_setting::company_setting.label.captcha_admin_login') !!}</label>                   
            <input class="field" {{($company_setting->captcha_admin_login==1)?'checked':''}} name="captcha_admin_login" type="checkbox" value="1">
        </div>
    </div>   

   
    <br/>
    <div class='col-md-12 col-sm-12'>
    <div id='Perfect_money' class="panel panel-default">
        <div class="panel-heading"><b>Company logo</b></div>
        <div class="panel-body">                
            <div class='col-md-12'>
                @if ($mode == 'create')
            <div class="tab-pane row" id="company_logoc">
                <div class="form-group">
                    <label for="company_logo" class="control-label col-lg-12 col-sm-12 text-left">
                        Company logo (194x60)
                    </label>
                    <div class='col-lg-12 '>
                        {!! $company_setting->files('company_logo')
                        ->url($company_setting->getUploadUrl('company_logo'))
                        ->uploader()!!}
                    </div>                            
                </div>
            </div>
            @elseif ($mode == 'edit')
            <div class="tab-pane row" id="company_logoc">
                <div class="form-group">
                    <label for="company_logo" class="control-label col-lg-12 col-sm-12 text-left">
                        Company logo (194x60)
                    </label>
                    <div class='col-lg-12'>
                        {!! $company_setting->files('company_logo')
                        ->url($company_setting->getUploadUrl('company_logo'))
                        ->uploader()!!}
                    </div>

                </div>
            </div>
            @elseif ($mode == 'show')
            <div class="tab-pane disabled row" id="company_logo">
                <div class='col-md-2'>
                    {!! $company_setting->files('company_logo') !!}
                </div>
            </div>
            @endif
            </div>
        </div>
    </div>
</div>
<div class='col-md-12 col-sm-12'>
    <div id='Perfect_money' class="panel panel-default">
        <div class="panel-heading"><b>We accept logos (Payment methods)</b></div>
        <div class="panel-body">                
            <div class='col-md-12'>
                @if ($mode == 'create')
            <div class="tab-pane row" id="company_method_logocc">
                <div class="form-group">
                    <label for="company_method_logo" class="control-label col-lg-12 col-sm-12 text-left">
                        Payment method logos (300x100)
                    </label>
                    <div class='col-lg-12'>
                        {!! $company_setting->files('company_method_logo')
                        ->url($company_setting->getUploadUrl('company_method_logo'))
                        ->uploader()!!}
                    </div>                            
                </div>
            </div>
            @elseif ($mode == 'edit')
            <div class="tab-pane row" id="company_method_logocc">
                <div class="form-group">
                    <label for="company_method_logo" class="control-label col-lg-12 col-sm-12 text-left">
                        Payment method logos (300x100)
                    </label>
                    <div class='col-lg-12'>
                        {!! $company_setting->files('company_method_logo')
                        ->url($company_setting->getUploadUrl('company_method_logo'))
                        ->uploader()!!}
                    </div>

                </div>
            </div>
            @elseif ($mode == 'show')
            <div class="tab-pane disabled row" id="company_method_logocc">
                <div class='col-md-12'>
                    {!! $company_setting->files('company_method_logo') !!}
                </div>
            </div>
            @endif
            </div>
        </div>
    </div>
</div>
</div>
<script>
   $(document).ready(function () {
            $("#company_name, #company_legal_name, #company_address").on('keypress', function (event) {
                var regex = new RegExp("^[a-zA-Z0-9_ ]*$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                    event.preventDefault();
                    alert("Please enter valid data");
                    return false;
                }
            });
            
            $('#company_country, #company_city').keypress(function (e) {
			var regex = new RegExp("^[a-zA-Z_ ]+$");
			var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
			if (!regex.test(str)) {
			    e.preventDefault();
			    alert('Please Enter Alphabets')
				return false;
			}
		
		});
		
		$("#company_zip_code").on('keypress', function (event) {
                var regex = new RegExp("^[0-9]*$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                    event.preventDefault();
                    alert("Please enter only numeric values");
                    return false;
                }
            });
        });
</script>
<script>
$(document).ready(function(){

    $('.cpp').on("cut copy paste",function(e) {
        e.preventDefault();
        alert("You cannot copy and paste into this text field.");
    });

    $('.tags').on("keydown", function(e){
        if (e.shiftKey && (e.which == 188 || e.which == 190)) {
        e.preventDefault();
        alert("You cannot add tags in the field.");
        }
    });
});
</script>