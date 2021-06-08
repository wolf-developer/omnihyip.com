            <table class="table" id="main-table" data-url="{!!guard_url('ticket/ticket_reply?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="ticket_id">{!! trans('ticket::ticket_reply.label.ticket_id')!!}</th>
                    <th data-field="body">{!! trans('ticket::ticket_reply.label.body')!!}</th>
                    <th data-field="replier_id">{!! trans('ticket::ticket_reply.label.replier_id')!!}</th>
                    <th data-field="attachment">{!! trans('ticket::ticket_reply.label.attachment')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">app.actions</th>
                    </tr>
                </thead>
            </table>