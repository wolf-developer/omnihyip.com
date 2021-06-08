<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for our_service in our_services package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  our_service module in our_services package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'OurService',
    'names'         => 'OurServices',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'OurServices',
        'sub'   => 'OurServices',
        'list'  => 'List of our_services',
        'edit'  => 'Edit our_service',
        'create'    => 'Create new our_service'
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
        'title'                      => 'Enter Title',
        'detail'                     => '',
        'image'                      => '',
        'created_at'                      => '',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'title'                      => 'Title',
        'detail'                     => 'Detail',
        'image'                      => 'Image',
        'created_at'                 => 'Created At',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'title'                      => ['name' => 'Title', 'data-column' => 1, 'checked'],
        'detail'                     => ['name' => 'Detail', 'data-column' => 2, 'checked'],
        'created_at'                     => ['name' => 'Created At', 'data-column' => 3, 'checked'],
        
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'OurServices',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
