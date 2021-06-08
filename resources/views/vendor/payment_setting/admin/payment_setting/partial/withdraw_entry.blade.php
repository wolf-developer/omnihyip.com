{!!Form::vertical_open()
        ->id('payment_setting-payment_setting-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('payment_setting/payment_setting/'. $payment_setting->getRouteKey()))!!}
<?php 
foreach ($widthrawal_payment_method as $widthrawal_payment_metho):
    echo '<script>$(document).ready(function(){ $("#withdraw_'.$widthrawal_payment_metho->payment_slug.'").remove(); });</script>';
endforeach;
?>
<div id='withdraw_Perfect_money' class="panel panel-default">
    <div class="panel-heading"><b>Perfect Money</b></div>
    <div class="panel-body">                
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('perfect_money_member_id')
            -> label(trans('payment_setting::payment_setting.label.perfect_money_member_id'))
            -> forceValue(($payment_setting->perfect_money_member_id)? decrypt_code($payment_setting->perfect_money_member_id) : '') 
            -> placeholder(trans('payment_setting::payment_setting.placeholder.perfect_money_member_id'))!!}
        </div>

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('perfect_money_account_id')
            -> label(trans('payment_setting::payment_setting.label.perfect_money_account_id'))
            -> forceValue(($payment_setting->perfect_money_account_id)? decrypt_code($payment_setting->perfect_money_account_id) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.perfect_money_account_id'))!!}
        </div>

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('perfect_money_phrase_hash')
            -> label(trans('payment_setting::payment_setting.label.perfect_money_phrase_hash'))
            -> forceValue(($payment_setting->perfect_money_phrase_hash)? decrypt_code($payment_setting->perfect_money_phrase_hash) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.perfect_money_phrase_hash'))!!}
        </div>
    </div>

</div>

<div id='withdraw_Paypal' class="panel panel-default">
    <div class="panel-heading"><b>Paypal</b></div>
    <div class="panel-body">
             
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('paypal_username')
            -> label(trans('payment_setting::payment_setting.label.paypal_username'))
            -> forceValue(($payment_setting->paypal_username)? decrypt_code($payment_setting->paypal_username) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.paypal_username'))!!}
        </div>    
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('paypal_pwd')
            -> label(trans('payment_setting::payment_setting.label.paypal_pwd'))
            -> forceValue(($payment_setting->paypal_pwd)? decrypt_code($payment_setting->paypal_pwd) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.paypal_pwd'))!!}
        </div>    
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('paypal_sign')
            -> label(trans('payment_setting::payment_setting.label.paypal_sign'))
            -> forceValue(($payment_setting->paypal_sign)? decrypt_code($payment_setting->paypal_sign) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.paypal_sign'))!!}
        </div>    
    </div>

</div>
<div id='withdraw_Coin_payment' class="panel panel-default">
    <div class="panel-heading"><b>Coin Payment</b></div>
    <div class="panel-body">

        <div class='col-md-3 col-sm-6'>
            {!! Form::text('coin_public_key')
            -> label(trans('payment_setting::payment_setting.label.coin_public_key'))
            -> forceValue(($payment_setting->coin_public_key)? decrypt_code($payment_setting->coin_public_key) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.coin_public_key'))!!}
        </div>                

        
        <div class='col-md-3 col-sm-6'>
            {!! Form::text('coin_p_pvt_key')
            -> label(trans('payment_setting::payment_setting.label.coin_p_pvt_key'))
            -> forceValue(($payment_setting->coin_p_pvt_key)? decrypt_code($payment_setting->coin_p_pvt_key) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.coin_p_pvt_key'))!!}
        </div>
    </div>

</div>

<div id='withdraw_Payeer' class="panel panel-default">
    
    <div class="panel-heading"><b>Payeer </b></div>
    <div class="panel-body">
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('payeer_account')
            -> label(trans('payment_setting::payment_setting.label.payeer_account'))
            -> forceValue(($payment_setting->payeer_account)? decrypt_code($payment_setting->payeer_account) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.payeer_account'))!!}
        </div>

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('payeer_api_user')
            -> label(trans('payment_setting::payment_setting.label.payeer_api_user'))
            -> forceValue(($payment_setting->payeer_api_user)? decrypt_code($payment_setting->payeer_api_user) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.payeer_api_user'))!!}
        </div>

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('payeer_api_secret')
            -> label(trans('payment_setting::payment_setting.label.payeer_api_secret'))
            -> forceValue(($payment_setting->payeer_api_secret)? decrypt_code($payment_setting->payeer_api_secret) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.payeer_api_secret'))!!}
        </div>
    </div>

</div>
<div id='withdraw_Advcash' class="panel panel-default">
    
    <div class="panel-heading"><b>Advcash</b></div>
    <div class="panel-body">
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('advcash_withdraw_email')
            -> label(trans('payment_setting::payment_setting.label.advcash_withdraw_email'))
            -> forceValue(($payment_setting->advcash_withdraw_email)? decrypt_code($payment_setting->advcash_withdraw_email) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.advcash_withdraw_email'))!!}
        </div>

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('advcash_api_name')
            -> label(trans('payment_setting::payment_setting.label.advcash_api_name'))
            -> forceValue(($payment_setting->advcash_api_name)? decrypt_code($payment_setting->advcash_api_name) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.advcash_api_name'))!!}
        </div>

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('advcash_api_password')
            -> label(trans('payment_setting::payment_setting.label.advcash_api_password'))
            -> forceValue(($payment_setting->advcash_api_password)? decrypt_code($payment_setting->advcash_api_password) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.advcash_api_password'))!!}
        </div>
    </div>
</div>
@if(getMethodStatusById('6') ==1)
<div id='withdraw_blockchain_address' class="panel panel-default">
    <div class="panel-heading"><b>BlockChain Wallet</b></div>
    <div class="panel-body">                
         

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('blockchain_guid')
            -> label(trans('payment_setting::payment_setting.label.blockchain_guid'))
            -> forceValue(($payment_setting->blockchain_guid)? decrypt_code($payment_setting->blockchain_guid) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.blockchain_guid'))!!}
        </div>
        <div class='col-md-3 col-sm-6'>
            {!! Form::text('blockchain_password')
            -> label(trans('payment_setting::payment_setting.label.blockchain_password'))
            -> forceValue(($payment_setting->blockchain_password)? decrypt_code($payment_setting->blockchain_password) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.blockchain_password'))!!}
        </div>
        

    </div>

</div>
@endif
@if(getAddonsinfo('blockmove') ==1)
<div id='withdraw_blockmove1' class="panel panel-default">
    <div class="panel-heading"><b>Blockmove Detail</b></div>
    <div class="panel-body">                
          <div class='col-md-4 col-sm-6'>
            {!! Form::text('withdraw_api_key')
            -> label(trans('payment_setting::payment_setting.label.withdraw_api_key'))
           -> forceValue(($payment_setting->withdraw_api_key)? decrypt_code($payment_setting->withdraw_api_key) : '')
          -> placeholder(trans('payment_setting::payment_setting.placeholder.withdraw_api_key'))!!}
        </div>

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('withdraw_secret_key')
            -> label(trans('payment_setting::payment_setting.label.withdraw_secret_key'))
            -> forceValue(($payment_setting->withdraw_secret_key)? decrypt_code($payment_setting->withdraw_secret_key) : '')
           -> placeholder(trans('payment_setting::payment_setting.placeholder.withdraw_secret_key'))!!}
        </div>
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('withdraw_wallet_btc_id')
            -> label(trans('payment_setting::payment_setting.label.withdraw_wallet_btc_id'))
            -> forceValue(($payment_setting->withdraw_wallet_btc_id)? decrypt_code($payment_setting->withdraw_wallet_btc_id) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.withdraw_wallet_btc_id'))!!}
        </div>
        
          <div class='col-md-4 col-sm-6'>
            {!! Form::text('withdraw_wallet_btc_pass')
            -> label(trans('payment_setting::payment_setting.label.withdraw_wallet_btc_pass'))
            -> forceValue(($payment_setting->withdraw_wallet_btc_pass)? decrypt_code($payment_setting->withdraw_wallet_btc_pass) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.withdraw_wallet_btc_pass'))!!}
        </div>
        
         <div class='col-md-4 col-sm-6'>
            {!! Form::text('withdraw_wallet_eth_id')
            -> label(trans('payment_setting::payment_setting.label.withdraw_wallet_eth_id'))
            -> forceValue(($payment_setting->withdraw_wallet_eth_id)? decrypt_code($payment_setting->withdraw_wallet_eth_id) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.withdraw_wallet_eth_id'))!!}
        </div>
        
        
          <div class='col-md-4 col-sm-6'>
            {!! Form::text('withdraw_wallet_eth_pass')
            -> label(trans('payment_setting::payment_setting.label.withdraw_wallet_eth_pass'))
            -> forceValue(($payment_setting->withdraw_wallet_eth_pass)? decrypt_code($payment_setting->withdraw_wallet_eth_pass) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.withdraw_wallet_eth_pass'))!!}
        </div>
       
    </div>

</div>
@endif
<input type="submit" value='Submit' class="btn btn-info">

        {!!Form::close()!!}