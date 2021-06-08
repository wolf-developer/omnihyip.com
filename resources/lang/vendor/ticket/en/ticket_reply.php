<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for ticket_reply in ticket package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  ticket_reply module in ticket package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'TicketReply',
    'names'         => 'TicketReplies',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'TicketReplies',
        'sub'   => 'TicketReplies',
        'list'  => 'List of ticket_replies',
        'edit'  => 'Edit ticket_reply',
        'create'    => 'Create new ticket_reply'
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
        'ticket_id'                  => 'Please enter ticket id',
        'body'                       => 'Please enter message',
        'replier_id'                 => 'Please enter replierid',
        'attachment'                 => 'Please enter attachment',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'ticket_id'                  => 'Ticket id',
        'body'                       => 'Message',
        'replier_id'                 => 'Replierid',
        'attachment'                 => 'Attachment',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'ticket_id'                  => ['name' => 'Ticket id', 'data-column' => 1, 'checked'],
        'body'                       => ['name' => 'Body', 'data-column' => 2, 'checked'],
        'replier_id'                 => ['name' => 'Replierid', 'data-column' => 3, 'checked'],
        'attachment'                 => ['name' => 'Attachment', 'data-column' => 4, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'TicketReplies',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
