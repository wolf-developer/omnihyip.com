<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for banner in banners package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  banner module in banners package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Banner',
    'names'         => 'Banners',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Banners',
        'sub'   => 'Banners',
        'list'  => 'List of banners',
        'edit'  => 'Edit banner',
        'create'    => 'Create new banner'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'              => [1=>'Active', 0=>'Inactive'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'image'                      => 'Please choose banner image',
        'status'                     => 'Please choose status',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'image'                      => 'Banner',
        'code'                      => 'Code',
        'status'                     => 'Status',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'image'                      => ['name' => 'Banner', 'data-column' => 1, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 2, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Banners',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
