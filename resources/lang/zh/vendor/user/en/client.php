<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for :client in user package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  :client module in user package
    | and it is used by the template/view files in this module
    |
     */

    /**
     * Singlular and plural name of the module
     */
    'name'        => ':Client',
    'names'       => ':Clients',

    /**
     * Singlular and plural name of the module
     */
    'title'       => [
        'main'   => ':Clients',
        'sub'    => ':Clients',
        'list'   => 'List of :clients',
        'edit'   => 'Edit :client',
        'create' => 'Create new :client',
    ],

    /**
     * Options for select/radio/check.
     */
    'options'     => [
        'sex'    => ['', 'male', 'female'],
        'status' => ['New', 'Active', 'Suspended', 'Locked'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder' => [
        'id'             => 'Please enter id',
        'name'           => 'Please enter name',
        'email'          => 'Please enter email',
        'password'       => 'Please enter password',
        'api_token'      => 'Please enter api token',
        'remember_token' => 'Please enter remember token',        
        'mobile'         => 'Please enter mobile',        
        'address'        => 'Please enter address',        
        'photo'          => 'Please enter photo',        
        'status'         => 'Please select status',
        'upload_folder'  => 'Please enter upload folder',
        'deleted_at'     => 'Please select deleted at',
        'created_at'     => 'Please select created at',
        'updated_at'     => 'Please select updated at',
    ],

    /**
     * Labels for inputs.
     */
    'label'       => [
        'id'             => 'Id',
        'name'           => 'Name',
        'email'          => 'Email',
        'password'       => 'Password',
        'api_token'      => 'Api token',
        'remember_token' => 'Remember token',        
        'mobile'         => 'Mobile',        
        'address'        => 'Address',        
        'photo'          => 'Photo',        
        'status'         => 'Status',
        'upload_folder'  => 'Upload folder',
        'deleted_at'     => 'Deleted at',
        'created_at'     => 'Created at',
        'updated_at'     => 'Updated at',
         'BTC'                  => 'Bitcoin Wallet Address',
        'LTC'                  => 'Litecoin Wallet Address',
        'ETH'                  => 'Ethereum Wallet Address',
        'Payeer'                  => 'Payeer Account Id',
        'Perfect_money'                  => 'Perfect Money Account Id',
        'Advcash'                  => 'Advcash Email Address',
        'Paypal'                  => 'Paypal Email Address',
        
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'     => [
        'name'     => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'email'    => ['name' => 'Email', 'data-column' => 2, 'checked'],        
        'mobile'   => ['name' => 'Mobile', 'data-column' => 3, 'checked'],        
        'address'  => ['name' => 'Address', 'data-column' => 4, 'checked'],        
        'photo'    => ['name' => 'Photo', 'data-column' => 5, 'checked'],        
    ],

    /**
     * Tab labels
     */
    'tab'         => [
        'name' => ':Clients',
    ],

    /**
     * Texts  for the module
     */
    'text'        => [
        'preview' => 'Click on the below list for preview',
    ],
];
