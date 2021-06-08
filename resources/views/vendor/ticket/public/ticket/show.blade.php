            <!-- @include('ticket::public.ticket.partial.header') -->

            <section class="single">
           
                    <div class="row">
                        <!-- <div class="col-md-3">
                            @include('ticket::public.ticket.partial.aside')
                        </div> -->
                        <div class="col-md-12">

                        	<div class="tickets_headings">
                                <div class="left_t_content">Show Ticket</div>
                            </div>

                            <div class="area card">
                                <div class="item card-block">
                                    
                                    <div class="content">
                                        <div class="row">
											<div class="col-md-4 col-sm-6">
												<div class"form-group">
													<label for="ticket_code">
														{!! trans('ticket::ticket.label.ticket_code') !!}
													</label><br />
														{!! $ticket['ticket_code'] !!}
												</div>
											</div>
											
											<div class="col-md-4 col-sm-6">
												<div class"form-group">
													<label for="ticket_status">
														{!! trans('ticket::ticket.label.ticket_status') !!}
													</label><br />
														{!! trans('ticket::ticket.options.ticket_status.'.$ticket['ticket_status']) !!}
												</div>
											</div>
										   
											<div class="col-md-4 col-sm-6">
												<div class"form-group">
													<label for="ticket_priority">
														{!! trans('ticket::ticket.label.ticket_priority') !!}
													</label><br />
														{!! trans('ticket::ticket.options.ticket_priority.'.$ticket['ticket_priority']) !!}
												</div>
											</div>
										
											<div class="col-md-12 col-sm-12">
												<div class"form-group">
													<label for="ticket_subject">
														{!! trans('ticket::ticket.label.ticket_subject') !!}
													</label><br />
														{!! $ticket['ticket_subject'] !!}
												</div>
											</div>
											<div class="col-md-4 col-sm-6">
												<div class"form-group">
													<label for="ticket_body">
														{!! trans('ticket::ticket.label.ticket_body') !!}
													</label><br />
														{!! $ticket['ticket_body'] !!}
												</div>
											</div>
											
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
          
            </section>



