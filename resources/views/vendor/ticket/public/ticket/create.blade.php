            <!-- @include('ticket::public.ticket.partial.header') -->

            <section class="single main_single_item">
                
                    <div class="row">
                        <!-- <div class="col-md-3">
                            @include('ticket::public.ticket.partial.aside')
                        </div> -->
                        <div class="col-md-12">

                            <div class="tickets_headings">
                                <div class="left_t_content"><?php echo trans('ticket::ticket.title.create_ticket'); ?></div>
                            </div>

                            <div class="area card">
                                <div class="item card-block">
                                    
                                    <div class="content">
                                   
   
											{!!Form::vertical_open()
            ->id('ticket-create')
            ->enctype('multipart/form-data')
            ->method('POST')
            ->files('true')
            ->action(guard_url('ticket/submit_ticket'))!!}
											{!! Form::hidden('ticket_user')
											->id('ticket_user')
											-> forceValue(user_id())!!}
											{!! Form::hidden('ticket_status')
											->id('ticket_status')
											-> forceValue(1)!!}
                            <div class='row'>
               

                <div class='col-md-6 col-sm-6 cp tags'>
                       {!! Form::text('ticket_subject')
                       -> label(trans('ticket::ticket.label.ticket_subject'))
                       -> required()
                       -> placeholder(trans('ticket::ticket.placeholder.ticket_subject'))!!}
                </div>
                
                <div class='col-md-6 col-sm-6'>
                    {!! Form::select('ticket_priority')
                    -> options(trans('ticket::ticket.options.ticket_priority'))
                    -> label(trans('ticket::ticket.label.ticket_priority'))
                    -> required()
                    -> placeholder(trans('ticket::ticket.placeholder.ticket_priority'))!!}
               </div>

                <div class='col-md-12 cp tags'>
                    {!! Form::textarea('ticket_body')
                    -> label(trans('ticket::ticket.label.ticket_body'))
                    -> required()
                    -> placeholder(trans('ticket::ticket.placeholder.ticket_body'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Form::submit('Submit')
                    -> addClass('btn theme-btn btn-block width_auto')!!}
                </div>
            </div>
                                    
                                    {!! Form::close() !!}
                             
                            </div>
                        </div>
                    </div>
              
            </section>




<script>
$(function() {
    $("form#ticket-create").validate({
    rules: {
    ticket_subject:{
        required:true,
        
        
    },
        ticket_priority: {
        required: true,
         
      },
      ticket_body: {
        required: true
       
      }
    
    },
     messages: {
        ticket_subject:{
        required: "Ticket subject is required"
       
       },
        ticket_priority: "Ticket priority is required",
        ticket_body: {
        required: "Ticket body is required"
       
        }
      
     },
     submitHandler: function(form) {
       
      form.submit();
    }
  });
});
</script>



















