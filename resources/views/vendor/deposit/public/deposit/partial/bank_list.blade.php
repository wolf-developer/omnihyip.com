
<style>
#transaction_proof {
  height: 34px;
}
</style>

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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse($deposits as $deposit)
                <tr>
                    <td>{!! !empty($deposit->plan_info->name) ? $deposit->plan_info->name : 'Plan Name Deleted' !!}</td>
                    <td>{!! $deposit->payment_sign.' '.number_format($deposit->amount,2,'.','') !!}</td>
                    <td><img src="{!! asset('public/assets/img/'.$deposit->payment_thro.'.png') !!}"></td>
					<td>{!! ($deposit->transaction_id!='')?$deposit->transaction_id:'NA' !!}</td>
					<?php if($deposit->transaction_proof !='' && $deposit->status=='Upload'){?>
                    <td><?php echo"Confirmation Pending"; ?></td>                   
            <?php } elseif($deposit->status=='Reject'){?>
				<td><?php echo"Rejected, Upload Slip again"; ?></td> 
				<?php }else{?>
				<td>Upload Your Slip</td>
				<?php }?>
				<td>
				<?php if($deposit->transaction_proof == '' || $deposit->transaction_proof=='NULL' || $deposit->status=='Reject'){ ?>
				 <span class="btn btn-xs btn-primary" id="upload" data-transaction_id="{{ $deposit->transaction_id }}" data-phone="{{ $deposit->phone }}" alt="{{ $deposit->user_id }}" data-id="{{ $deposit->id }}" data-toggle="modal" data-target="#myModal"><i class="fa fa-upload" aria-hidden="true"></i> Upload</span>
				                    <button class="btn btn-danger" href="javascript:void(0)" value="{{ $deposit->id }}" onclick="delete_request(this.value)">Delete</button>
				                    
<?php }?>
</td>
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
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Transaction Detail</h4>
        </div>
        <div class="modal-body">
			
			
          <p>{!!Form::open()

                        ->class('form form-groups-bordered ads-form')

                        ->id('plan-pay')
                        ->files(true)
                        ->enctype('multipart/form-data')
                        ->method('POST')            
                        ->action(guard_url('bank_image'))!!}
                        {{ csrf_field() }}
<input type="hidden" name="id" id="id">
<input type="hidden" name="user_id" id="user_id">

<h5>Transaction Id</h5>
	<div class="form-group">
		<input type="text" name="transaction_id" class="form-control" id="transaction_id" required>
	</div>
	<div class="form-group">
		{!!Form::file('transaction_proof')
		-> label(false) 
		-> raw()
		-> required()
		-> placeholder('image')!!}
	</div>
	<div class="extension"><p class="file_extension">*Please upload a File with extenstion : jpeg, pdf, png, jpg, gif, svg</p></div>
	<input type="submit" id="sbtn" class="btn btn-primary" value="Upload">
{!! Form::close() !!}</p>
                                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<script>
    $(document).ready(function () {
		$('#plan-plan-list').DataTable();
		
    });
    
    $(document).on('click','#upload',function(){
		$('#id').val($(this).data('id'));
			$('#user_id').val($(this).attr('alt'));
		//$('#transaction_id').val($(this).data('transaction_id'));
	});
	
	function delete_request(id){
	   
	$.ajax({
                    url: "{{guard_url('delete_bank')}}",
                    type: 'POST',
                    data: {'id' : id},
                    success:function(data)
                    {
						msg = JSON.parse(data);
                        swal({
						  title: "Deleted!",
						  text: msg.message,
						  type: "success",
						  confirmButtonText: "OK"
						});
						setTimeout(function(){
						   window.location.reload(1);
						}, 2000);
                    },
                    error:function(data)
                    {
						msg = JSON.parse(data);
                        swal("Failed!", msg.message, "error");
                    },
                });
}
	
</script>
