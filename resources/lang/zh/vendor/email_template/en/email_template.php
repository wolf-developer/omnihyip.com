<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for email_template in email_template package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  email_template module in email_template package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'EmailTemplate',
    'names'         => 'EmailTemplates',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'EmailTemplates',
        'sub'   => 'EmailTemplates',
        'list'  => 'List of email_templates',
        'edit'  => 'Edit email_template',
        'create'    => 'Create new email_template'
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
        'subject'                    => 'Enter Subject',
        'body'                       => '',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'subject'                    => 'Subject',
        'body'                       => 'Body',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'subject'                    => ['name' => 'Subject', 'data-column' => 1, 'checked'],
        'body'                       => ['name' => 'Body', 'data-column' => 2, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'EmailTemplates',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
