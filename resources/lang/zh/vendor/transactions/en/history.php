<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Language files for history in transactions package
      |--------------------------------------------------------------------------
      |
      | The following language lines are  for  history module in transactions package
      | and it is used by the template/view files in this module
      |
     */

    /**
     * Singlular and plural name of the module
     */
    
    'wallet_debit' => 'Wallet Debit History',
    'wallet_credit' => 'Wallet Credit History',
    'deposit' => 'Deposit History',
    'intrest_earned' => 'Interest History',
    'withdrawal' => 'Withdrawal History',
    'withdraw_pending' => 'Withdrawal Request History',
    'commissions' => 'Commission History',
    'release_deposit' => 'Release Deposit History',
    'bonus' => 'Bonus History',
    'penality' => 'Penality History',
    'name' => 'Transaction History',
    'withdraw_requests' => 'Withdraw Requests',
    'send_funds' => 'Send Funds',
    'names' => 'Histories',
    'withdrawname' => 'Withdrawal',
    /**
     * Singlular and plural name of the module
     */
    'title' => [
        'main' => 'Histories',
        'sub' => 'Histories',
        'list' => 'List of histories',
        'edit' => 'Edit history',
        'create' => 'Create new history',
        'historytitle' => 'Transactions List of ',
        'withdrawtitle' => 'Request for Withdrawal'
    ],
    /**
     * Options for select/radio/check.
     */
    'options' => [
        'transaction_type' => ['' => 'All', 'deposit' => 'Deposit', 'bonus' => 'Bonus', 'withdrawal' => 'Withdrawal', 'commissions' => 'Commissions', 'withdraw_pending' => 'Withdraw Pending', 'intrest_earned' => 'Intrest Earned', 'wallet_credit' => 'Wallet Credit', 'wallet_debit' => 'Wallet Debit','penality'=>'Penality'],
        'payment_thro' => ['BTC' => 'Bitcoin', 'LTC' => 'Litecoin', 'ETH' => 'Ethereum', 'Advcash' => 'Advcash', 'perfect_money' => 'Perfect Money', 'payeer' => 'Payeer', 'blockchain' => 'Bitcoin Wallet', 'paypal' => 'Paypal', 'USD' => 'USD', 'wallet_debit' => 'Debit from Wallet','bank' =>'Bank','wallet_credit' => 'Credit to Wallet'],
    ],
    /**
     * Placeholder for inputs
     */
    'placeholder' => [
        'amount' => 'Enter Amount($)',
        'transaction_type' => '',
        'description' => 'Enter Description',
        'payment_thro' => '',
        'transaction_id' => '',
        'status' => '',
    ],
    /**
     * Labels for inputs.
     */
    'label' => [
        'amount' => 'Amount($)',
        'transaction_type' => 'Transaction Type',
        'description' => 'Description',
        'payment_thro' => 'Payment Through',
        'transaction_id' => 'Transaction Id',
        'status' => 'Status',
        'created_at' => 'Date',
        'user_id' => 'Select Client'
    ],
    /**
     * Columns array for show hide checkbox.
     */
    'cloumns' => [
    ],
    /**
     * Tab labels
     */
    'tab' => [
        'name' => 'Histories',
    ],
    /**
     * Texts  for the module
     */
    'text' => [
        'preview' => 'Click on the below list for preview',
    ],
];
