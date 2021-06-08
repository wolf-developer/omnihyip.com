<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Language files for payment_setting in payment_setting package
      |--------------------------------------------------------------------------
      |
      | The following language lines are  for  payment_setting module in payment_setting package
      | and it is used by the template/view files in this module
      |
     */

    /**
     * Singlular and plural name of the module
     */
    'name' => 'Payment Setting',
    'dname' => 'Deposit PaymentSetting',
    'wname' => 'Withdrwal PaymentSetting',
    'names' => 'PaymentSettings',
    /**
     * Singlular and plural name of the module
     */
    'title' => [
        'main' => 'PaymentSettings',
        'sub' => 'PaymentSettings',
        'list' => 'List of payment_settings',
        'edit' => 'Edit payment_setting',
        'create' => 'Create new payment_setting'
    ],
    /**
     * Options for select/radio/check.
     */
    'options' => [
    ],
    /**
     * Placeholder for inputs
     */
    'placeholder' => [
        'perfect_money_member_id' => '',
        'perfect_money_account_id' => '',
        'perfect_money_phrase_hash' => '',
        'paypal_business_id' => '',        
        'paypal_username' => '',        
        'paypal_pwd' => '',        
        'paypal_sign' => '',        
        'coin_public_key' => '',        
        'coin_payments_ipn_key' => '',
        'coin_p_merchant_id' => '',
        'coin_p_pvt_key' => '',
        'payeer_shop_id' => '',
        'payeer_shop_secret_key' => '',
        'payeer_account' => '',
        'payeer_api_user' => '',
        'payeer_api_secret' => '',
        'advcash_email' => '',
        'advcash_sci_name' => '',
        'advcash_sci_batch_key' => '',
        'advcash_withdraw_email' => '',
        'advcash_api_name' => '',
        'advcash_api_password' => '',
        'blockchain_address' => '',
        'blockchain_guid' => '',
        'blockchain_password' => '',
        'blockchain_btc_fee' => '',
        'bank_address' => '',
        'bank_account' => '',
        'bank_ifc' => '',
        'fund_fees' => '',
    ],
    /**
     * Labels for inputs.
     */
    'label' => [
        'perfect_money_member_id' => 'Perfect Money Member Id',
        'perfect_money_account_id' => 'Perfect Money Account Id',
        'perfect_money_phrase_hash' => 'Perfect Money Password',
        'paypal_business_id' => 'Paypal Business Id',        
        'paypal_username' => 'Paypal Username',        
        'paypal_pwd' => 'Paypal Password',
        'paypal_sign' => 'Paypal Signature', 
        'coin_public_key' => 'Coin Payment Public Key',        
        'coin_payments_ipn_key' => 'Coin Payment IPN Key',
        'coin_p_merchant_id' => 'Coin Payment Merchant Id',
        'coin_p_pvt_key' => 'Coin Payment Private Key',
        'payeer_shop_id' => 'Payeer Shop ID',
        'payeer_shop_secret_key' => 'Payeer Shop Secret Key',
        'payeer_account' => 'Payeer Account',
        'payeer_api_user' => 'Payeer API User',
        'payeer_api_secret' => 'Payeer API Secret',
        'advcash_email' => 'Advcash Email',
        'advcash_sci_name' => 'Advcash SCI Name',
        'advcash_sci_batch_key' => 'Advcash SCI BATCH KEY',
        'advcash_withdraw_email' => 'Advcash Email',
        'advcash_api_name' => 'Advcash API Name',
        'advcash_api_password' => 'Advcash API Password',
        'blockchain_address' => 'Blockchain Address',
        'blockchain_guid' => 'Blockchain Guid',
        'blockchain_password' => 'Blockchain Password',
        'blockchain_btc_fee' => 'Blockchain Fees',
        'bank_address' => 'Bank Address',
        'bank_account' => 'Bank Account',
        'bank_ifc' => 'Bank Ifc',
        'fund_fees' => 'Transfer fees',
    ],
    /**
     * Columns array for show hide checkbox.
     */
    'cloumns' => [
        'perfect_money_member_id' => ['name' => 'Perfect Money Member Id', 'data-column' => 1, 'checked'],
        'perfect_money_account_id' => ['name' => 'Perfect Money Account Id', 'data-column' => 2, 'checked'],
        'perfect_money_phrase_hash' => ['name' => 'Perfect Money Phrase Hash', 'data-column' => 3, 'checked'],
        'paypal_business_id' => ['name' => 'Paypal Business Id', 'data-column' => 4, 'checked'],        
        'paypal_username' => ['name' => 'Paypal Username', 'data-column' => 5, 'checked'],        
        'paypal_pwd' => ['name' => 'Paypal Password', 'data-column' => 6, 'checked'],        
        'paypal_sign' => ['name' => 'Paypal Signature', 'data-column' => 7, 'checked'],        
        'coin_public_key' => ['name' => 'Coin Payments Public Key', 'data-column' => 8, 'checked'],        
        'coin_payments_ipn_key' => ['name' => 'Coin Payments IPN Key', 'data-column' => 9, 'checked'],
        'coin_p_merchant_id' => ['name' => 'Coin Payment Merchant Id', 'data-column' => 10, 'checked'],
        'coin_p_pvt_key' => ['name' => 'Coin Payment Private Key', 'data-column' => 11, 'checked'],
        'payeer_shop_id' => ['name' => 'Payeer Shop ID', 'data-column' =>12, 'checked'],
        'payeer_shop_secret_key' => ['name' => 'Payeer Shop Secret Key', 'data-column' => 13, 'checked'],
        'payeer_account' => ['name' => 'Payeer Account', 'data-column' => 14, 'checked'],
        'payeer_api_user' => ['name' => 'Payeer API User', 'data-column' => 15, 'checked'],
        'payeer_api_secret' => ['name' => 'Payeer API Secret', 'data-column' => 16, 'checked'],
        'advcash_email' => ['name' => 'Advcash Email', 'data-column' => 17, 'checked'],
        'advcash_sci_name' => ['name' => 'Advcash SCI Name', 'data-column' => 18, 'checked'],
        'advcash_sci_batch_key' => ['name' => 'Advcash SCI BATCH KEY', 'data-column' => 19, 'checked'],
        'advcash_withdraw_email' => ['name' => 'Advcash Email', 'data-column' => 20, 'checked'],
        'advcash_api_name' => ['name' => 'Advcash API Name', 'data-column' => 21, 'checked'],
        'advcash_api_password' => ['name' => 'Advcash API Password', 'data-column' => 22, 'checked'],
        'blockchain_address' => ['name' => 'Blockchain Address', 'data-column' => 23, 'checked'],
        'blockchain_guid' => ['name' => 'Blockchain Guid', 'data-column' => 24, 'checked'],
        'blockchain_password' => ['name' => 'Blockchain Password', 'data-column' => 25, 'checked'],
        'blockchain_btc_fee' => ['name' => 'Blockchain Fees', 'data-column' => 26, 'checked'],
        'bank_address' => ['name' => 'Bank Address', 'data-column' => 27, 'checked'],
        'bank_account' => ['name' => 'Bank Account', 'data-column' => 28, 'checked'],
        'bank_ifc' => ['name' => 'Bank Ifc', 'data-column' => 29, 'checked'],
        'fund_fees' => ['name' => 'Transfer Fees', 'data-column' => 30, 'checked'],
    ],
    /**
     * Tab labels
     */
    'tab' => [
        'name' => 'PaymentSettings',
        'dname' => 'Deposit PaymentSettings',
        'wname' => 'Withdrwal PaymentSettings',
    ],
    /**
     * Texts  for the module
     */
    'text' => [
        'preview' => 'Click on the below list for preview',
    ],
];
