<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for addon in addons package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  addon module in addons package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Addon',
    'names'         => 'Addons',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Addons',
        'sub'   => 'Addons',
        'list'  => 'List of addons',
        'edit'  => 'Edit addon',
        'create'    => 'Create new addon'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'add_bank' =>[0 =>'No', 1=>'Yes'],
            'hide_compound_rate' =>[0 =>'No', 1=>'Yes'],
            'provide_google_authentication' =>[0 =>'No', 1=>'Yes'],
            'admin_user_login' =>[0 =>'No', 1=>'Yes'],

    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'admin_user_login'           => '',
        'add_bank'                   => '',
        'hide_compound_rate'         => '',
        'provide_google_authentication'        => '',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'admin_user_login'           => 'Admin can user login',
        'add_bank'                   => 'Add Bank',
        'hide_compound_rate'         => 'Hide Compound Rate',
        'provide_google_authentication'        => 'Provide Google Authentication',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'admin_user_login'           => ['name' => 'Admin can user login', 'data-column' => 1, 'checked'],
        'add_bank'                   => ['name' => 'Add Bank', 'data-column' => 2, 'checked'],
        'hide_compound_rate'         => ['name' => 'Hide Compound Rate', 'data-column' => 3, 'checked'],
        'provide_google_authentication'        => ['name' => 'Provide Google Authentication', 'data-column' => 4, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Addons',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
