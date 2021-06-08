<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for deposit in deposit package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  deposit module in deposit package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Deposit',
    'names'         => 'Deposits',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Deposits',
        'sub'   => 'Deposits',
        'list'  => 'List of deposits',
        'edit'  => 'Edit deposit',
        'create'    => 'Create new deposit',
        'plandeposit'=>'List of Deposits'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'    => []
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'user_id'                    => '',
        'plan_id'                    => '',
        'amount'                     => 'Enter amount',
        'transaction_id'             => '',
        'investment_date'            => '',
        'maturity_date'              => '',
        'status'                     => '',
        'send_to'                     => 'Send To',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'user_id'                    => 'User',
        'plan_id'                    => 'Plan',
        'amount'                     => 'Amount($)',
        'payment_thro'               => 'Payment Through',
        'transaction_id'             => 'Transaction Id',
        'investment_date'            => 'Investment Date',
        'maturity_date'              => 'Maturity Date',
        'status'                     => 'Status',
        'transaction_proof'          => 'Transaction Proof',
        'action'                     =>  'Action',
        
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'user_id'                    => ['name' => 'User', 'data-column' => 1, 'checked'],
        'plan_id'                    => ['name' => 'Plan', 'data-column' => 2, 'checked'],
        'amount'                     => ['name' => 'Amount', 'data-column' => 3, 'checked'],
        'amount'                     => ['name' => 'Amount', 'data-column' => 4, 'checked'],
        'transaction_id'             => ['name' => 'Transaction Id', 'data-column' => 5, 'checked'],
        'investment_date'            => ['name' => 'Investment Date', 'data-column' => 6, 'checked'],
        'maturity_date'              => ['name' => 'Maturity Date', 'data-column' => 7, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 8, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Deposits',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
