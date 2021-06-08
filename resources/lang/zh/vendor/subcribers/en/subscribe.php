<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for subscribe in subcribers package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  subscribe module in subcribers package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Subscribe',
    'names'         => 'Subscribes',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Subscribes',
        'sub'   => 'Subscribes',
        'list'  => 'List of subscribes',
        'edit'  => 'Edit subscribe',
        'create'    => 'Create new subscribe'
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
       
        'sub_email'                  => '',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        
        'sub_email'                  => 'Email',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [        
        'sub_email'                  => ['name' => '', 'data-column' => 1, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Subscribes',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
