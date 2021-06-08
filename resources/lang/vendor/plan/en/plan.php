<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Language files for plan in plan package
      |--------------------------------------------------------------------------
      |
      | The following language lines are  for  plan module in plan package
      | and it is used by the template/view files in this module
      |
     */

    /**
     * Singlular and plural name of the module
     */
    'name' => 'Plan',
    'names' => 'Plans',
    'currency_simb' => '$',
    /**
     * Singlular and plural name of the module
     */
    'title' => [
        'main' => 'Plans',
        'plandeposit' => 'Current Deposits',
        'sub' => 'Plans',
        'list' => 'List of plans',
        'edit' => 'Edit plan',
        'create' => 'Create new plan',
        'submit_payment' => 'Submit Payment'
    ],
    /**
     * Options for select/radio/check.
     */
    'options' => [
        'week_type' => [0 => 'Monday to Sunday', 1=>'Monday to Friday'],
        'interest_period_type' => [],
        'investment_duration_type' => [],
        'choose_payment_geteway' => ['Advcash' => 'Advcash', 'Perfect_money' => 'Perfect Money', 'Payeer' => 'Payeer', 'Paypal' => 'Paypal', 'Coin_payment' => 'Coin Payment', 'Wallet' => 'Wallet', 'blockchain_address' => 'Bitcoin'/*, 'Skrill' => 'Skrill',  'Stripe' => 'Stripe'*/],
        'choose_withdrawal_geteway' => ['BTC' => 'BTC', 'LTC' => 'LTC', 'ETH'=> 'ETH', 'Advcash' => 'Advcash', 'Perfect_money' => 'Perfect Money', 'Payeer' => 'Payeer', 'Paypal' => 'Paypal', 'blockchain_address' => 'Bitcoin' /*'Skrill' => 'Skrill', , 'Stripe' => 'Stripe'*/],
        'interest_after_matured' => [],        
        'release_deposit' => []        
    ],
    /**
     * Placeholder for inputs
     */
    'placeholder' => [
        'name' => 'Enter Name',
        'min_investment' => 'Minimum Investment',
        'max_investment' => 'Maximum Investment',
        'interest_after_matured' => 'Interest After Matured',
        'release_deposit' => 'Principal Return',
        'profit' => 'Profit (%)',
        'interest_period_type' => 'Interest Period Type',
        'investment_duration' => 'Investment Duration',
        'investment_duration_type' => 'Investment Duration Type',
        'week_type' => 'Interest From',
    ],
    /**
     * Labels for inputs.
     */
    'label' => [
        'name' => 'Name',
        'min_investment' => 'Minimum Investment',
        'max_investment' => 'Maximum Investment',
        'interest_after_matured' => 'Interest After Matured',
        'release_deposit' => 'Principal Return',
        'profit' => 'Profit (%)',
        'interest_period_type' => 'Interest Period Type',
        'investment_duration' => 'Investment Duration',
        'investment_duration_type' => 'Investment Duration Type',
        'week_type' => 'Interest from',
        'wallet_not_created'=>'Blockchain Wallet cannot be created. Please try again.'
    ],
    /**
     * Columns array for show hide checkbox.
     */
    'cloumns' => [
        'name' => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'min_investment' => ['name' => 'Minimum Investment', 'data-column' => 2, 'checked'],
        'max_investment' => ['name' => 'Maximum Investment', 'data-column' => 3, 'checked'],
        'interest_after_matured' => ['name' => 'Interest After Matured', 'data-column' => 4, 'checked'],
        'release_deposit' => ['name' => 'Principal Return', 'data-column' => 5, 'checked'],
        'profit' => ['name' => 'Profit (%)', 'data-column' => 6, 'checked'],
        'interest_period_type' => ['name' => 'Interest Period Type', 'data-column' => 7, 'checked'],
        'investment_duration' => ['name' => 'Investment Duration', 'data-column' => 8, 'checked'],
        'investment_duration_type' => ['name' => 'Investment Duration Type', 'data-column' => 9, 'checked'],
    ],
    /**
     * Tab labels
     */
    'tab' => [
        'name' => 'Plans',
    ],
    /**
     * Texts  for the module
     */
    'text' => [
        'preview' => 'Click on the below list for preview',
    ],
];
