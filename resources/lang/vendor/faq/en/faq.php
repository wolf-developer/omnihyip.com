<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for faq in faq package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  faq module in faq package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Faq',
    'names'         => 'Faqs',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Faqs',
        'sub'   => 'Faqs',
        'list'  => 'List of faqs',
        'edit'  => 'Edit faq',
        'create'    => 'Create new faq'
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
        'question'                   => 'Enter Question',
        'answer'                     => 'Enter Answer',
        'created_at'                 => '',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'question'                   => 'Question',
        'answer'                     => 'Answer',
        'created_at'                 => 'Created Date',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'question'                   => ['name' => 'Question', 'data-column' => 1, 'checked'],
        'answer'                     => ['name' => 'Answer', 'data-column' => 2, 'checked'],
        'created_at'                 => ['name' => 'Created Date', 'data-column' => 3, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Faqs',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
