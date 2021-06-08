            <table class="table" id="main-table" data-url="{!!guard_url('deposit/deposit?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="user_id">{!! trans('deposit::deposit.label.user_id')!!}</th>
                    <th data-field="plan_id">{!! trans('deposit::deposit.label.plan_id')!!}</th>
                    <th data-field="amount">{!! trans('deposit::deposit.label.amount')!!}</th>
                    <th data-field="transaction_id">{!! trans('deposit::deposit.label.transaction_id')!!}</th>
                    <th data-field="investment_date">{!! trans('deposit::deposit.label.investment_date')!!}</th>
                    <th data-field="maturity_date">{!! trans('deposit::deposit.label.maturity_date')!!}</th>
                    <th data-field="status">{!! trans('deposit::deposit.label.status')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">app.actions</th>
                    </tr>
                </thead>
            </table>