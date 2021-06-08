<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for testimonial in testimonial package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  testimonial module in testimonial package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Testimonial',
    'names'         => 'Testimonials',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Testimonials',
        'sub'   => 'Testimonials',
        'list'  => 'List of testimonials',
        'edit'  => 'Edit testimonial',
        'create'    => 'Create new testimonial'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'              => ['show'=> 'Show','hide'=>'Hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'client_name'                => 'Please enter client name',
        'client_msg'                 => 'Please enter message',
        'image'                      => 'Please enter image',
        'status'                     => 'Please select status',
        'upload_folder'              => 'Please enter upload folder',
        'deleted_at'                 => 'Please select deleted',
        'created_at'                 => 'Please select created',
        'updated_at'                 => 'Please select updated',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'client_name'           	 => 'Client Name',
        'client_msg'                 => 'Message',
        'image'                      => 'Image',
        'status'                     => 'Status',
        'upload_folder'              => 'Upload folder',
        'deleted_at'                 => 'Deleted',
        'created_at'                 => 'Created',
        'updated_at'                 => 'Updated ',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'client_name'               => ['name' => 'Client Name', 'data-column' => 1, 'checked'],
        'client_msg'                => ['name' => 'Message', 'data-column' => 2, 'checked'],
        'created_at'                => ['name' => 'Date', 'data-column' => 3, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Testimonials',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
