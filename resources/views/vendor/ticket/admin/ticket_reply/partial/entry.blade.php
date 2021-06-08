            <div class='row'>
                {!! Form::hidden('replier_id')->id('replier_id')-> forceValue(user_id())!!}
                {!! Form::hidden('ticket_id')->id('ticket_id')-> forceValue($ticket->id)!!}
                {!! Form::hidden('current_ticket_status')->id('current_ticket_status')-> forceValue($ticket->ticket_status)!!}
				 <div class='col-md-6 col-sm-6'>
                    {!! Form::select('ticket_status')
                    -> options(trans('ticket::ticket.options.ticket_status'))
                    -> label(trans('ticket::ticket.label.ticket_status'))
                    -> required()
                    -> forceValue($ticket->ticket_status)
                    -> placeholder(trans('ticket::ticket.placeholder.ticket_status'))!!}
               </div>
               <div class="clearfix"></div>
               
                <div class='col-md-6 cpp tags'>
                    {!! Form::textarea('body')
                    -> label(trans('ticket::ticket_reply.label.body'))
                    -> required()
                    -> placeholder(trans('ticket::ticket_reply.placeholder.body'))!!}
                </div>
                  <div class='col-md-12'>
                    {!! Form::submit('Submit')
                    -> addClass('btn')!!}
                </div>

                
            </div>
<script>
$(document).ready(function(){

    $('.cpp').on("cut copy paste",function(e) {
        e.preventDefault();
        alert("You cannot copy and paste into this text field.");
    });

    $('.tags').on("keydown", function(e){
        if (e.shiftKey && (e.which == 188 || e.which == 190)) {
        e.preventDefault();
        alert("You cannot add tags in the field.");
        }
    });
});
</script>
