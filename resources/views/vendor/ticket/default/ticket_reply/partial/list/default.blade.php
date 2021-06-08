                    <div class="list-view">
                        @forelse($ticket_replies as $ticket_reply)
                        <div class="card list-view-media"  id="{!! $ticket_reply->getRouteKey() !!}">
                            <div class="card-block">
                                <div class="media">
                                    <a class="media-left" href="#"><img class="media-object card-list-img" src="{!!$ticket_reply->picture!!}"></a>
                                    <div class="media-body">
                                        <div class="heading">
                                            <h3>{!! $ticket_reply->name !!}</h3>
                                            <h6>{!! $ticket_reply->email !!}</h6>
                                            <div class="status">
                                                <span class="verified">Verified</span>
                                                <span class="approved">Approved</span>
                                            </div>
                                        </div>
                                        <p>{!! $ticket_reply->details !!}</p>
                                        <div class="actions">

                                            <a href="{!! guard_url('ticket/ticket_reply') !!}/{!! $ticket_reply->getRouteKey() !!}/edit" class="text-primary" data-toggle="tooltip" data-placement="left" title="Edit" data-action="EDIT" ><i class="icon-pencil"></i></a>

                                            <a href="{!! guard_url('ticket/ticket_reply') !!}/{!! $ticket_reply->getRouteKey() !!}" class="text-danger" data-toggle="tooltip" data-placement="left" title="Delete" data-action="DELETE" data-remove="{!! $ticket_reply->getRouteKey() !!}"><i class="icon-trash"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endif
                </div>