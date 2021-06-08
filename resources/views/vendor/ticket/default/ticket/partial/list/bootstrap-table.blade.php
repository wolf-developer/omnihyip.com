            <table class="table" id="main-table" data-url="{!!guard_url('ticket/ticket?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="ticket_code">{!! trans('ticket::ticket.label.ticket_code')!!}</th>
                    <th data-field="ticket_subject">{!! trans('ticket::ticket.label.ticket_subject')!!}</th>
                    <th data-field="ticket_body">{!! trans('ticket::ticket.label.ticket_body')!!}</th>
                    <th data-field="ticket_status">{!! trans('ticket::ticket.label.ticket_status')!!}</th>
                    <th data-field="ticket_user">{!! trans('ticket::ticket.label.ticket_user')!!}</th>
                    <th data-field="ticket_priority">{!! trans('ticket::ticket.label.ticket_priority')!!}</th>
                    <th data-field="ticket_file">{!! trans('ticket::ticket.label.ticket_file')!!}</th>
                    <th data-field="ticket_comment">{!! trans('ticket::ticket.label.ticket_comment')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">app.actions</th>
                    </tr>
                </thead>
            </table>