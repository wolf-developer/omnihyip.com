            <table class="table" id="main-table" data-url="{!!guard_url('transactions/history?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="user_id">{!! trans('transactions::history.label.user_id')!!}</th>
                    <th data-field="amount">{!! trans('transactions::history.label.amount')!!}</th>
                    <th data-field="transaction_type">{!! trans('transactions::history.label.transaction_type')!!}</th>
                    <th data-field="description">{!! trans('transactions::history.label.description')!!}</th>
                    <th data-field="payment_thro">{!! trans('transactions::history.label.payment_thro')!!}</th>
                    <th data-field="transaction_id">{!! trans('transactions::history.label.transaction_id')!!}</th>
                    <th data-field="status">{!! trans('transactions::history.label.status')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">app.actions</th>
                    </tr>
                </thead>
            </table>