<div class="list-view">
    <div class="tab-content">
		<?php 
		for($i=1;$i<=getCompanyinfo('maxreferral');$i++){?>
		<div id="ref_level_<?php echo $i;?>" class="tab-pane fade <?php if($i==1){ echo 'in active'; } ?>">
			<label>Referral Percentage : </label> <?php echo get_ref_level($i);?>%		<br>
			<table class="table table-striped data-table plan-plan-list">
				<thead class="list_head">
					<tr>
						<th data-field="name">Name</th>
						<th data-field="email">Email</th>
						<th data-field="status">Status</th>                    
					</tr>
				</thead>
				<tbody>
				   
					@forelse($user_referral['level_'.$i] as $referral)
					<tr>
						<td>{!! $referral->name !!}</td>
						<td>{!! $referral->email !!}</td>
					   <td>{!! $referral->status !!}</td>                                    

					</tr>
					@empty
					<tr>
						<td colspan="8">
							<div class="plan-gadget-box">
								<p>No Record</p>
							</div>
						</td>
					</tr>
					@endif
				</tbody>
			</table>
		</div>
		<?php }?>
	</div>
</div>
<script>
    $(document).ready(function () {
    $('.plan-plan-list').DataTable();
    });
</script>
