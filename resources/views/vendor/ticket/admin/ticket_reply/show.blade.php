    
    <div class="content-wrapper">
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {{ trans('app.view') }}   Comments</a></li>
           
        </ul>
        @if($ticket->ticket_status!=4)
        {!!Form::vertical_open()->id('ticket-ticket_reply-new')->method('POST')->files('true')->action(guard_url('ticket_reply/submit_reply'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.add') }}   Comment</div>
                <div class="tab-pane active" id="details">
                    @include('ticket::admin.ticket_reply.partial.entry', ['mode' => 'new'])
                </div>
            </div>
            
        {!! Form::close() !!}
        @endif
        <div class="tab-content clearfix disabled">
                <div class="tab-pan-title">   Comments</div>
                <div class="tab-pane active" id="details">
					
					@if($ticket_replies)
						@foreach($ticket_replies as $ticket_reply)
							<div class="row">
								<div class="col-md-6">{{ ($ticket_reply['user_type']=='App\Client')? 'Client' : 'Admin' }}</div>
								<div  class="col-md-6">{{format_date_time($ticket_reply['created_at'])}}</div>
								<div class="col-md-12">{{$ticket_reply['body']}}</div>
							</div>
						 @endforeach
					@else
					<div class="row">No record</div>		
                     @endif
                </div>
            </div>
    </div>
    </div>
