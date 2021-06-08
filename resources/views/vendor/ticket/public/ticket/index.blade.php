         <!--    @include('ticket::public.ticket.partial.header') -->

            <section class="grid inner-grid">
                    <div class="row">
                        <!-- <div class="col-md-3">
                            @include('ticket::public.ticket.partial.aside')
                        </div> -->
                        
                        <div class="col-md-12">
                            <div class="main-area parent-border list-item">

                                <div class="tickets_headings">
                                    <div class="left_t_content">{!! trans('ticket::ticket.name') !!}</div>
                                    <div class="right_t_content">
                                        @include('ticket::public.ticket.partial.aside')
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-block">
                                        <div class="table-responsive no_brdd"> 
                                          <table id="plan-plan-list" class="table table-striped data-table">
                                            <thead class="list_head">
                                                <tr>
                                                    <th width="20" data-field="ticket_subject">{!! trans('ticket::ticket.label.ticket_subject')!!}</th>
                                                    <th width="20" data-field="ticket_code">{!! trans('ticket::ticket.label.ticket_code')!!}</th>
                                                    <th width="20" data-field="ticket_status">{!! trans('ticket::ticket.label.ticket_status')!!}</th>
                                                    <th width="20" data-field="created_at">{!! trans('ticket::ticket.label.created_at')!!}</th>
                                                    <th width="20" data-field="ticket_body">{!! trans('ticket::ticket.label.ticket_body')!!}</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                @foreach($tickets as $ticket)
                                                <tr>
                                                    <td>{{str_limit($ticket['ticket_subject'], 300)}}</td>
                                                    <td><a href="{{guard_url('tickets')}}/{{$ticket['id']}}" class="">Code: {!! $ticket['ticket_code'] !!}</a></td>
                                                    <td>{{trans("ticket::ticket.options.ticket_status.".$ticket['ticket_status'])}}</td>
                                                    <td>{{format_date($ticket['created_at'])}}</td>
                                                    <td>{!! $ticket['ticket_body'] !!}</td>
                                                   
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
            </section>

<script>
    $(document).ready(function () {
      $('#plan-plan-list').DataTable();
    });
</script> 
