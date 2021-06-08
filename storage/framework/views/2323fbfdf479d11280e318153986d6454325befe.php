<div class="list-view">
    <div class="tab-content">
        <table id="plan-plan-list" class="table table-striped data-table">
            <thead class="list_head">
                <tr>
                    <th data-field="name"><?php echo trans('plan::plan.name'); ?></th>
                    <th data-field="amount"><?php echo trans('deposit::deposit.label.amount'); ?></th>
                    <th data-field="transaction_id"><?php echo trans('deposit::deposit.label.transaction_id'); ?></th>
                    <th data-field="investment_date"><?php echo trans('deposit::deposit.label.investment_date'); ?></th>
                    <th data-field="maturity_date"><?php echo trans('deposit::deposit.label.maturity_date'); ?></th>
                    <th data-field="status"><?php echo trans('deposit::deposit.label.status'); ?></th>
                </tr>
            </thead>
            <tbody>
               
                <?php $__empty_1 = true; $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo $plan->name; ?></td>
                    <td><?php echo $plan->amount; ?></td>
                    <td><?php echo ($plan->transaction_id!='')?$plan->transaction_id:'NA'; ?></td>
                    <td><?php echo ($plan->investment_date!='')?format_date_time($plan->investment_date):'NA'; ?></td>
                    <td><?php echo ($plan->maturity_date!='')?format_date_time($plan->maturity_date):'NA'; ?></td>
                    <td><?php echo $plan->status; ?></td>                   

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td>
                        <div class="plan-gadget-box">
                            <p>No Plan</p>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>
<script>
    $(document).ready(function () {
    $('#plan-plan-list').DataTable({
        "order": [],
    });
    });
</script>
