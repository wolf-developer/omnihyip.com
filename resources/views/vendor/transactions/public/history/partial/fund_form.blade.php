<?php
$max_balance=0;
$balance= number_format($balance, 4, '.', '');
if($balance>0){
$min_balance= ($balance*$fee)/100;
$max_balance= $balance - $min_balance;
$max_balance= number_format($max_balance, 4, '.', '');
}

?>

<div class="tab-content no-padding">

    <div class="tab-pane active" id="new">
        <?php   if($balance>0){ ?>

        {!!Form::open()
                ->class('form-horizontal form-groups-bordered')
                ->id('send-funds')
                ->method('POST')            
                ->action(guard_url('submit_funds'))!!}
                {{ csrf_field() }}
            @include('notifications')
            <div class="row">
                
                
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="background:#114a83;padding:9px;color:#ffffff;font-weight:bold;" class="withdraw-account">Your Total Balance ($): {{$balance}}</div>
                            </div>
                        </div>
                    </div>
                    <?php if($fee!=0){?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Note</h4>
                                <ul>
                                    <li>The fee for transfer fund is <?php echo $fee?>%</li>
                                    <?php if($max_balance!=0){ ?>
                                        <li>Your withdrawable amount is $<?php echo $max_balance;?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } 
                
                    ?>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label"><strong>Send To</strong><span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            {!! Form::text('send_to')
                                ->label(false)
                                ->required()
                                ->placeholder(trans('deposit::deposit.placeholder.send_to'))!!}                                
                        </div>
                    </div>
                    
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
                        <label class="col-sm-4 control-label"><strong>Comment </strong><span class="text-danger"></span></label>
                        <div class="col-sm-8">
                            {!! Form::textarea('comment')
                                -> label(false)!!}                            
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-sm-4"></label>
                        <div class="col-sm-8">
                            <button type="submit" id="sbtn" class="btn btn-primary">Send Funds</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
        <?php } 
        else{
        ?>
         <div class="row">
                
                
                <div class="col-sm-8">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="" class="withdraw-account">You have not enough balance to send anyone</div>
                            </div>
                        </div>
                    </div>
        <?php } ?>
    </div>
</div>

<script>
    $('document').ready(function(){
        
        $("#send-funds").validate({
            rules: {
                amount: {
                    required: true,
                    number:true,
                    min:0.01,
                    <?php if($max_balance > 0){ ?>
                    max: <?php echo $max_balance;?>,
                    <?php }?>
                },
                send_to: {
                    required: true,
                    email: true,
                    
                },
            },
            messages: {
                amount: {
                    required: "Please enter amount",
                    number: "Please enter valid amount",
                },
                send_to: {
                    required: "Please enter email address",
                    email: "Please enter valid email addres",
                    remote : "The user is not found in our website or you cannot sent deposit to your email"
                },
            }
        });

    });
</script>
</div>
</div>
