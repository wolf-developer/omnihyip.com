<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for affiliate in affiliate package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  affiliate module in affiliate package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Affiliate',
    'names'         => 'Affiliates',
    'referralname'=>'Referrals',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Affiliates',
        'sub'   => 'Affiliates',
        'list'  => 'List of affiliates',
        'edit'  => 'Edit affiliate',
        'create'    => 'Create new affiliate',
        'referral'=>'Referrals'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'ref_level'                => '',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'ref_level'                => 'Level',
        'manage_commission'                => 'Manage Commission Percentage',
    ],   

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'ref_level_1'                => ['name' => 'Commission Percentage for Level 1', 'data-column' => 1, 'checked'],
        'ref_level_2'                => ['name' => 'Commission Percentage for Level 2', 'data-column' => 2, 'checked'],
        'ref_level_3'                => ['name' => 'Commission Percentage for Level 3', 'data-column' => 3, 'checked'],
        'ref_level_4'                => ['name' => 'Commission Percentage for Level 4', 'data-column' => 4, 'checked'],
        'ref_level_5'                => ['name' => 'Commission Percentage for Level 5', 'data-column' => 5, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Affiliates',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
