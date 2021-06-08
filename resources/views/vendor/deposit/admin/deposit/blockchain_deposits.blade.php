<style>
.tabBank .table td img {
  height: 70px;
}

img.modal-content {
  max-width: 650px !important;
}

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> Blockchain Deposits <small> {!! trans('app.manage') !!} Blockchain Deposits</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('deposit::deposit.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">


<div class="list-view">
    <div class="tab-content tabBank">
        <table id="plan-plan-list" class="table table-striped data-table">
            <thead class="list_head">
                <tr>
                    <th data-field="username">User</th>
                    <th data-field="name">{!! trans('plan::plan.label.name')!!}</th>
                    <th data-field="amount">{!! trans('deposit::deposit.label.amount')!!}</th>
                    <th data-field="payment_thro">{!! trans('deposit::deposit.label.payment_thro')!!}</th>
                    <th data-field="transaction_id">{!! trans('deposit::deposit.label.transaction_id')!!}</th>
                    <th data-field="status">Action</th>
                </tr>
            </thead>
            <tbody>
               
                @forelse($deposits as $deposit)
                <tr>
                    <td>{!! isset($deposit->user_info->name)?$deposit->user_info->name:'NA' !!}</td>
                    <td>{!! isset($deposit->plan_info->name)?$deposit->plan_info->name:'NA' !!}</td>
                    <td>{!! $deposit->payment_sign.' '.number_format($deposit->amount,2,'.','') !!}</td>
                    <td><img src="{!! asset('public/assets/img/'.$deposit->payment_thro.'.png') !!}"></td>
					<td>{!! ($deposit->transaction_id!='')?$deposit->transaction_id:'NA' !!}</td>
					 
					   <?php if($deposit->status =='Upload'){ ?>
          
					<td><button type="button" value="{!!url($deposit->status) !!}" class="btn btn-info" data-action="Active" id="active" alt="{!! $deposit->id !!}" name="early_access">Approve</button> | 

	<button type="button" value="{!!url($deposit->status) !!}"  class="btn btn-danger" data-action="Reject" id="active" alt="{!! $deposit->id !!}" name="early_access">Reject</button></td>

 <?php }  ?>
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
<!-- The Modal -->


<script>
   $('button[name="early_access"]').on('click', function(event) {
	   event.preventDefault();
	  // debugger;
	   var  id  =  $(this).attr('alt');
	   var action = $(this).data('action');
	   	
	   $.ajax({
			url: '{{guard_url("deposit/change_blockchain_status")}}',
			method: 'POST',
			data: {
				id: id,
				status: action
			}
		}).done(function(data) {
			location.reload();
		});
	});
	
	
	
	
</script>





