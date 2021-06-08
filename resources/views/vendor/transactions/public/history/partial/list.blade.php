<div class="list-view">
    <div class="tab-content">
        <table id="plan-plan-list" class="table table-striped data-table">
            <thead class="list_head">
                <tr>
                    <th data-field="created_at">{!! trans('transactions::history.label.created_at')!!}</th>
                    <th data-field="amount">{!! trans('transactions::history.label.amount')!!}</th>
                    <th data-field="payment_thro">{!! trans('transactions::history.label.payment_thro')!!}</th>
                    <th data-field="transaction_type">{!! trans('transactions::history.label.transaction_type')!!}</th>  
                    <th data-field="description">{!! trans('transactions::history.label.description')!!}</th> 
                </tr>
            </thead>
            <tbody>
               
                @forelse($histories as $history)
                <tr>
                    <td>{!! format_date_time($history->created_at) !!}</td>
                    <td>{!! $history->amount !!}</td>
                    <td>{!! trans('transactions::history.options.payment_thro.'.$history->payment_thro) !!}</td>
                    <td>{!! trans('transactions::history.options.transaction_type.'.$history->transaction_type) !!}</td>
                    <td>{!! ($history->description!='')?$history->description:'NA' !!}</td>

                </tr>
                @empty
                <tr>
                    <td colspan="8">
                        <div class="plan-gadget-box">
                            <p>No Transaction</p>
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
