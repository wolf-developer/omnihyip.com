<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for ticket in ticket package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  ticket module in ticket package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Ticket',
    'names'         => 'Tickets',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Tickets',
        'sub'   => 'Tickets',
        'list'  => 'List of tickets',
        'edit'  => 'Edit ticket',
        'create'    => 'Create new ticket',
        'create_ticket' => 'Create Ticket',
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'ticket_status'       => [1=>'Open', 2=> 'In Progress', 3=>'Completed', 4=>'Closed'],
            'ticket_priority'     => ['low'=>'Low', 'medium'=>'Medium', 'high'=>'High'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'ticket_code'                => 'Please enter ticket code',
        'ticket_subject'             => 'Please enter ticket subject',
        'ticket_body'                => 'Please enter ticket body',
        'ticket_status'              => 'Please enter ticket status',
        'ticket_user'                => 'Please enter ticket user',
        'ticket_priority'            => 'Please enter ticket priority',
        'ticket_file'                => 'Please enter ticket file',
        'ticket_comment'             => 'Please enter ticket comment',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'ticket_code'                => 'Ticket code',
        'ticket_subject'             => 'Ticket subject',
        'ticket_body'                => 'Ticket body',
        'ticket_status'              => 'Ticket status',
        'ticket_user'                => 'Ticket user',
        'ticket_priority'            => 'Ticket priority',
        'ticket_file'                => 'Ticket file',
        'ticket_comment'             => 'Ticket comment',
        'created_at'             => 'Created At',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'ticket_code'                => ['name' => 'Ticket code', 'data-column' => 1, 'checked'],
        'ticket_subject'             => ['name' => 'Ticket subject', 'data-column' => 2, 'checked'],
        'ticket_body'                => ['name' => 'Ticket body', 'data-column' => 3, 'checked'],
        'ticket_status'              => ['name' => 'Ticket status', 'data-column' => 4, 'checked'],
        'ticket_user'                => ['name' => 'Ticket user', 'data-column' => 5, 'checked'],
        'ticket_priority'            => ['name' => 'Ticket priority', 'data-column' => 6, 'checked'],
        'ticket_file'                => ['name' => 'Ticket file', 'data-column' => 7, 'checked'],
        'ticket_comment'             => ['name' => 'Ticket comment', 'data-column' => 8, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Tickets',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
