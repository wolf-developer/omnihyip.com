                    <div class="list-view grid">
                        <div class="row">
                        @forelse($ticket_replies as $ticket_reply)
                        <div class="col-md-4">
                        <div class="card list-view-media mb-10"  id="{!! $ticket_reply->getRouteKey() !!}">
                            <div class="card-block">
                                <div class="media">
                                    <a class="media-left" href="{!! trans_url('ticket') !!}/{!! $ticket_reply->getPublicKey() !!}" target="_blank">
                                        <img class="media-object card-list-img" src="http://via.placeholder.com/264x164/FC0079/FFF?text=ADVT">
                                    </a>
                                    <div class="media-body">
                                        <div class="heading">
                                            <h3><a  href="{!! trans_url('ticket') !!}/{!! $ticket_reply->getPublicKey() !!}" target="_blank">{{ $ticket_reply->name }}</a></h3>
                                            <h6>{{ $ticket_reply->email }}</h6>
                                            <div class="status">
                                                <span class="verified">Verified</span>
                                                <span class="approved">Approved</span>
                                            </div>
                                        </div>

                                        <div class="actions">

                                            <a href="{!! guard_url('ticket/ticket_reply') !!}/{!! $ticket_reply->getRouteKey() !!}" class="text-primary" data-toggle="tooltip" data-placement="left" title="Edit" data-action="EDIT" ><i class="icon-eye"></i></a>

                                            <a href="{!! guard_url('ticket/ticket_reply') !!}/{!! $ticket_reply->getRouteKey() !!}/edit" class="text-primary" data-toggle="tooltip" data-placement="left" title="Edit" data-action="EDIT" ><i class="icon-pencil"></i></a>

                                            <a href="{!! guard_url('ticket/ticket_reply') !!}/{!! $ticket_reply->getRouteKey() !!}" class="text-danger" data-toggle="tooltip" data-placement="left" title="Delete" data-action="DELETE" data-remove="{!! $ticket_reply->getRouteKey() !!}"><i class="icon-trash"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endif
                </div>
                </div>