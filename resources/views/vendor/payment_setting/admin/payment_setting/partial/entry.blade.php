{!!Form::vertical_open()
        ->id('payment_setting-payment_setting-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('payment_setting/payment_setting/'. $payment_setting->getRouteKey()))!!}
<?php 
if(!empty($payment_method)){
    foreach ($payment_method as $payment_metho):
        echo '<script>$(document).ready(function(){ $("#'.$payment_metho->payment_slug.'").remove(); });</script>';
    endforeach;
}
?>

<div id='Coin_payment' class="panel panel-default">
    <div class="panel-heading"><b>Coin Payment</b></div>
    <div class="panel-body">

                      

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('coin_payments_ipn_key')
            -> label(trans('payment_setting::payment_setting.label.coin_payments_ipn_key'))
            -> forceValue(($payment_setting->coin_payments_ipn_key)? decrypt_code($payment_setting->coin_payments_ipn_key) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.coin_payments_ipn_key'))!!}
        </div>
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('coin_p_merchant_id')
            -> label(trans('payment_setting::payment_setting.label.coin_p_merchant_id'))
            -> forceValue(($payment_setting->coin_p_merchant_id)? decrypt_code($payment_setting->coin_p_merchant_id) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.coin_p_merchant_id'))!!}
        </div>
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('coin_p_pvt_key')
            -> label(trans('payment_setting::payment_setting.label.coin_p_pvt_key'))
            -> forceValue(($payment_setting->coin_p_pvt_key)? decrypt_code($payment_setting->coin_p_pvt_key) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.coin_p_pvt_key'))!!}
        </div>
    </div>

</div>

<div id='Perfect_money' class="panel panel-default">
    <div class="panel-heading"><b>Perfect Money</b></div>
    <div class="panel-body">                
        <div class='col-md-6 col-sm-6'>
            {!! Form::text('perfect_money_account_id')
            -> label(trans('payment_setting::payment_setting.label.perfect_money_account_id'))
            -> forceValue(($payment_setting->perfect_money_account_id)? decrypt_code($payment_setting->perfect_money_account_id) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.perfect_money_account_id'))!!}
        </div>
    </div>

</div>

<div id='Paypal' class="panel panel-default">
    <div class="panel-heading"><b>Paypal</b></div>
    <div class="panel-body">
          <div class='col-md-6 col-sm-6'>
            {!! Form::text('paypal_business_id')
            -> label(trans('payment_setting::payment_setting.label.paypal_business_id'))
            -> forceValue(($payment_setting->paypal_business_id)? decrypt_code($payment_setting->paypal_business_id) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.paypal_business_id'))!!}
        </div>   
    </div>

</div>

<div id='Payeer' class="panel panel-default">
    <div class="panel-heading"><b>Payeer</b></div>
    <div class="panel-body">

        <div class='col-md-6 col-sm-6'>
            {!! Form::text('payeer_shop_id')
            -> label(trans('payment_setting::payment_setting.label.payeer_shop_id'))
            -> forceValue(($payment_setting->payeer_shop_id)? decrypt_code($payment_setting->payeer_shop_id) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.payeer_shop_id'))!!}
        </div>

        <div class='col-md-6 col-sm-6'>
            {!! Form::text('payeer_shop_secret_key')
            -> label(trans('payment_setting::payment_setting.label.payeer_shop_secret_key'))
            -> forceValue(($payment_setting->payeer_shop_secret_key)? decrypt_code($payment_setting->payeer_shop_secret_key) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.payeer_shop_secret_key'))!!}
        </div>
    </div>
    

</div>
<div id='Advcash' class="panel panel-default">
    <div class="panel-heading"><b>Advcash</b></div>
    <div class="panel-body">
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('advcash_email')
            -> label(trans('payment_setting::payment_setting.label.advcash_email'))
            -> forceValue(($payment_setting->advcash_email)? decrypt_code($payment_setting->advcash_email) : '') 
            -> placeholder(trans('payment_setting::payment_setting.placeholder.advcash_email'))!!}
        </div>

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('advcash_sci_name')
            -> label(trans('payment_setting::payment_setting.label.advcash_sci_name'))
            -> forceValue(($payment_setting->advcash_sci_name) ? decrypt_code($payment_setting->advcash_sci_name) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.advcash_sci_name'))!!}
        </div>

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('advcash_sci_batch_key')
            -> label(trans('payment_setting::payment_setting.label.advcash_sci_batch_key'))
            -> forceValue(($payment_setting->advcash_sci_batch_key)?decrypt_code($payment_setting->advcash_sci_batch_key):'')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.advcash_sci_batch_key'))!!}
        </div>
    </div>
    
</div>
@if(getMethodStatusById('6') ==1)
<div id='blockchain_address' class="panel panel-default">
    <div class="panel-heading"><b>BlockChain Wallet</b></div>
    <div class="panel-body">                
          <div class='col-md-6 col-sm-6'>
            {!! Form::text('blockchain_address')
            -> label(trans('payment_setting::payment_setting.label.blockchain_address'))
            -> forceValue(($payment_setting->blockchain_address)? decrypt_code($payment_setting->blockchain_address) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.blockchain_address'))!!}
        </div>

    </div>

</div>
@endif
@if(getAddonsinfo('add_bank') ==1)


<div id='bank' class="panel panel-default">
    <div class="panel-heading"><b>Bank Detail</b></div>
    <div class="panel-body">                
          <div class='col-md-4 col-sm-6'>
            {!! Form::text('bank_address')
            -> label(trans('payment_setting::payment_setting.label.bank_address'))
           -> forceValue(($payment_setting->bank_address)? decrypt_code($payment_setting->bank_address) : '')
          -> placeholder(trans('payment_setting::payment_setting.placeholder.bank_address'))!!}
        </div>

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('bank_account')
            -> label(trans('payment_setting::payment_setting.label.bank_account'))
            -> forceValue(($payment_setting->bank_account)? decrypt_code($payment_setting->bank_account) : '')
           -> placeholder(trans('payment_setting::payment_setting.placeholder.bank_account'))!!}
        </div>
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('bank_ifc')
            -> label(trans('payment_setting::payment_setting.label.bank_ifc'))
            -> forceValue(($payment_setting->bank_ifc)? decrypt_code($payment_setting->bank_ifc) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.bank_ifc'))!!}
        </div>
       
    </div>

</div>


@endif
@if(getAddonsinfo('blockmove') ==1)
<div id="blockmove1" class="panel panel-default">
    <div class="panel-heading"><b>Blockmove Detail</b></div>
    <div class="panel-body">                
          <div class='col-md-4 col-sm-6'>
            {!! Form::text('deposit_api_key')
            -> label(trans('payment_setting::payment_setting.label.deposit_api_key'))
           -> forceValue(($payment_setting->deposit_api_key)? decrypt_code($payment_setting->deposit_api_key) : '')
          -> placeholder(trans('payment_setting::payment_setting.placeholder.deposit_api_key'))!!}
        </div>

        <div class='col-md-4 col-sm-6'>
            {!! Form::text('deposit_secret_key')
            -> label(trans('payment_setting::payment_setting.label.deposit_secret_key'))
            -> forceValue(($payment_setting->deposit_secret_key)? decrypt_code($payment_setting->deposit_secret_key) : '')
           -> placeholder(trans('payment_setting::payment_setting.placeholder.deposit_secret_key'))!!}
        </div>
        <div class='col-md-4 col-sm-6'>
            {!! Form::text('deposit_wallet_btc_id')
            -> label(trans('payment_setting::payment_setting.label.deposit_wallet_btc_id'))
            -> forceValue(($payment_setting->deposit_wallet_btc_id)? decrypt_code($payment_setting->deposit_wallet_btc_id) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.deposit_wallet_btc_id'))!!}
        </div>
        
         <div class='col-md-4 col-sm-6'>
            {!! Form::text('deposit_wallet_eth_id')
            -> label(trans('payment_setting::payment_setting.label.deposit_wallet_eth_id'))
            -> forceValue(($payment_setting->deposit_wallet_eth_id)? decrypt_code($payment_setting->deposit_wallet_eth_id) : '')
            -> placeholder(trans('payment_setting::payment_setting.placeholder.deposit_wallet_eth_id'))!!}
        </div>
       
    </div>

</div>
@endif
<div id='' class="panel panel-default">
    <div class="panel-heading"><b>Fund Transfer Fee (%)</b></div>
    <div class="panel-body">                
          <div class='col-md-6 col-sm-6'>
            {!! Form::text('fund_fees')
            -> label(trans('payment_setting::payment_setting.label.fund_fees'))
            -> forceValue(($payment_setting->fund_fees))
            -> placeholder(trans('payment_setting::payment_setting.placeholder.fund_fees'))!!}
        </div>
    </div>

</div>

<input type="submit" value='Submit' class="btn btn-info">


        {!!Form::close()!!}