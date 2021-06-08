<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for payout in payout package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  payout module in payout package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Payout',
    'names'         => 'Payouts',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Payouts',
        'sub'   => 'Payouts',
        'list'  => 'List of payouts',
        'edit'  => 'Edit payout',
        'create'    => 'Create new payout'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
           'work_from_cron' => ['1' => 'Yes', '0' => 'No'],
        
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'withdraw_minimum'           => '',
        'withdraw_maximum'           => '',
        'withdraw_allow_month'        => '',
        
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'withdraw_minimum'           => 'Minimum Withdraw Amount ',
        'withdraw_maximum'           => 'Maximum Withdraw Amount',
        'withdraw_allow_month'        => 'Number of Withdraw Allowed in a month',
        'work_from_cron'        => 'Automatic Cron',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'withdraw_minimum'           => ['name' => 'Minimum Withdraw Amount ', 'data-column' => 1, 'checked'],
        'withdraw_maximum'           => ['name' => 'Maximum Withdraw Amount', 'data-column' => 2, 'checked'],
        'withdraw_allow_month'        => ['name' => 'Number of Withdraw Allowed in a month', 'data-column' => 3, 'checked'],
        'work_from_cron'        => ['name' => 'Automatic Cron', 'data-column' => 4, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Payouts',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
