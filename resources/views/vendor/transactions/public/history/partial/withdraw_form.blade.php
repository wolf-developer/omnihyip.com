<?php
$user_balance=get_user_balance(user_id());
$total_withdraw_balance = $user_balance['total_withdraw_balance'];
$minimum_amt=0;
$maximum_amt=0;
$maximum_withdraw_limit=0;
if(!empty($payout)){
	$minimum_amt=$payout->withdraw_minimum;
	$maximum_amt=$payout->withdraw_maximum;
	$withdraw_allow_month=$payout->withdraw_allow_month;
}

?>
<?php if($total_withdraw_balance > 0){ ?>
<div class="tab-content no-padding">

    <div class="tab-pane active" id="new">
		

        {!!Form::open()
                ->class('form-horizontal form-groups-bordered')
                ->id('plan-pay')
                ->method('POST')            
                ->action(guard_url('withdraws'))!!}
                {{ csrf_field() }}
            @include('notifications')
            <div class="row">
				
				
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="background:#114a83;padding:9px;color:#ffffff;font-weight:bold;" class="withdraw-account">Your Withdrawable Amount($): {{$total_withdraw_balance}}</div>
                            </div>
                        </div>
                    </div>
                    <?php if(!empty($payout)){?>
                    <div class="form-group">
						<div class="row">
                            <div class="col-md-12">
								<h4>Note</h4>
								<ul>
									<li>Only those method payment methods are visible to you, which are filled by you in your profile.</li>
									<!--<li>Your wallet address for the payment method should be correct.</li>-->
									<?php if($minimum_amt!=0){?>
									<li>Minimum amount for withdraw is {!!__('plan::plan.currency_simb')!!}{{$minimum_amt}}</li>
									<?php } ?>
									<?php  /* if($maximum_amt!=0){?>
									<li>Maximum amount for withdraw is {!!__('plan::plan.currency_simb')!!}{{$maximum_amt}}</li>
									<?php } ?>
									<?php if($withdraw_allow_month!=0){?>
									<li>Maximum allow for withdrawal for month is {{$withdraw_allow_month}}</li>
									<?php } */ ?>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"><strong>Amount ({!!__('plan::plan.currency_simb')!!})</strong><span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            {!! Form::decimal('amount')
                                ->label(false)
                                ->required()
                                ->placeholder(trans('deposit::deposit.placeholder.amount'))!!}                                
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"><strong>Withdraw method</strong><span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            {!! Form::select('currency_thro')
                            -> options($final_payment_arr)                        
                            -> required()
                            -> addClass('payment_gateway')
                            -> label(false)!!} 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label"><strong>Comment </strong><span class="text-danger"></span></label>
                        <div class="col-sm-8">
                            {!! Form::textarea('comment')
                                -> label(false)!!}                            
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-sm-4"></label>
                        <div class="col-sm-8">
                            <button type="submit" id="sbtn" class="btn btn-primary">Create Request</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
        <?php } else{
        ?>
        <div class="row">
				
				
                <div class="col-sm-8">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="" class="withdraw-account"><i class="fa fa-money"></i> You have not enough balance to withdrawal</div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

    </div>
</div>
<style>
    .withdraw-account {
    font-size: 22px;
    margin: 20px 0 0 16px;
    color: #d01f1f;
}

    
    
    
</style>


<script>
	$('document').ready(function(){
		<?php foreach($payment_address_arr as $key=>$val){
			if($val=='' || $val==NULL){
				?>
				$(".payment_gateway option[value='<?php echo $key;?>']").remove();
				<?php
			}
		}?>
		$("#plan-pay").validate({
			rules: {
				amount: {
					required: true,
					number:true,
					<?php if($minimum_amt!=0) { ?>
					min : <?php echo $minimum_amt;?>,
					<?php }?>
					<?php if($maximum_amt!=0) { ?>
					max : <?php echo $maximum_amt;?>
					<?php }?>
				},
			},
			messages: {
				amount: {
					required: "Please enter amount",
					number: "Please enter valid amount",
				},
			},
			submitHandler : function(form) {
    //do something here
    form.submit();
}
		});

	});
</script>
