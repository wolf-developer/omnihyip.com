<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('deposit::deposit.name') !!} <small> {!! trans('app.manage') !!} {!! trans('deposit::deposit.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('deposit::deposit.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">


<div class="list-view">
    <div class="tab-content">
        <table id="plan-plan-list" class="table table-striped data-table">
            <thead class="list_head">
                <tr>
                    <th data-field="name">{!! trans('plan::plan.label.name')!!}</th>
                    <th data-field="amount">{!! trans('deposit::deposit.label.amount')!!}</th>
                    <th data-field="payment_thro">{!! trans('deposit::deposit.label.payment_thro')!!}</th>
                    <th data-field="transaction_id">{!! trans('deposit::deposit.label.transaction_id')!!}</th>
                    <th data-field="status">{!! trans('deposit::deposit.label.status')!!}</th>
                    <th data-field="status">{!! trans('deposit::deposit.label.action')!!}</th>
                </tr>
            </thead>
            <tbody>
               
                @forelse($deposits as $deposit)
                <tr>
                    <td>{!! $deposit->plan_info->name !!}</td>
                    <td>{!! $deposit->payment_sign.' '.number_format($deposit->amount,2,'.','') !!}</td>
                    <td><img id="img_<?php echo $deposit->id;?>" onclick="showDialog(<?php echo $deposit->id;?>)" src="{!! asset('public/assets/img/'.$deposit->payment_thro.'.png') !!}"></td>
					<td>{!! ($deposit->transaction_id!='')?$deposit->transaction_id:'NA' !!}</td>
					
					<?php if($deposit->transaction_proof !=''){?>
                    <td><?php echo"Uploaded"; ?></td>                   
            <?php }else{?>
				<td> Not uploaded</td> 
				<?php }?>
				<?php if(empty($deposit->transaction_proof)){?>
				                    <td><img src=""></td>

<?php }?>
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
</div>
</section>
