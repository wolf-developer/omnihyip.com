<div class="list-view">
    <div class="tab-content">
        <table id="plan-plan-list" class="table table-striped data-table">
            <thead class="list_head">
                <tr>
                    <th data-field="name">{!! trans('plan::plan.name')!!}</th>
                    <th data-field="amount">{!! trans('deposit::deposit.label.amount')!!}</th>
                    <th data-field="transaction_id">{!! trans('deposit::deposit.label.transaction_id')!!}</th>
                    <th data-field="investment_date">{!! trans('deposit::deposit.label.investment_date')!!}</th>
                    <th data-field="maturity_date">{!! trans('deposit::deposit.label.maturity_date')!!}</th>
                    <th data-field="status">{!! trans('deposit::deposit.label.status')!!}</th>
                </tr>
            </thead>
            <tbody>
               
                @forelse($deposits as $plan)
                <tr>
                    <td>{!! $plan->name !!}</td>
                    <td>{!! $plan->amount !!}</td>
                   <td>{!! ($plan->transaction_id!='')?$plan->transaction_id:'NA' !!}</td>
                    <td>{!! ($plan->investment_date!='')?format_date_time($plan->investment_date):'NA' !!}</td>
                    <td>{!! ($plan->maturity_date!='')?format_date_time($plan->maturity_date):'NA' !!}</td>
                    <td>{!! $plan->status !!}</td>                   

                </tr>
                @empty
                <tr>
                    <td colspan="8">
                        <div class="plan-gadget-box">
                            <p>No Deposit</p>
                        </div>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

</div>
<script>
    $(document).ready(function () {
    $('#plan-plan-list').DataTable();
    });
</script>
