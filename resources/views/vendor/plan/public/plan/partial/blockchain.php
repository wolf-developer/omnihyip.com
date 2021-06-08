<?php
if(getAddonsinfo('manual_blockchain')==1){
$amount = $amount+$trans_fee;
$transaction_fee = $trans_fee;
}
else{
    $amount = $amount+$commission+$trans_fee;
    $transaction_fee = $trans_fee+$commission;
}
?>
<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title plans-heading">Submit Payment</h6>
        <div  class="trs">Transaction Fee (<?php echo $address;?>): <?php echo $transaction_fee;?></div>
								<div  class="trs">Total amount to be paid (<?php echo $address;?>): <?php echo number_format($amount,8);?></div>
    </div>
    <div class="panel-body">


        <!-- <a href="/refund/">Learn More</a>. -->

        <div class="container-fluid  col-md-12">
            <div class="container-fluid  col-md-8">
                <div class="qr_code">
						 <h2>Please pay exact same amount of BTC displayed below</h2>
					      <h3>Plan Payment Standard</h3>
					      <p>To deposit BTC, please send <b><span class="amountget"><?php echo number_format($amount,8);?></span> BTC</b> to the address below.</p>
					      <h4 class="bitcoin_addressadd"><?php echo $address;?></h4>
						  
					      <div class="qr_code_scan">
					        <p>You can scan this QR-code in order to copy the address</p>
					        <img style="max-width:300px;" id="btcqrsource" class="" alt="" src="https://blockchain.info/qr?data=bitcoin:<?php echo $address;?>&size=300">
					      </div>
					    </div>
					    <?php if(getAddonsinfo('manual_blockchain')==1){ ?>
					    <p>When you are done with payment, please update transaction id on <a href="<?php echo guard_url('blockchain_request')?>">Bitcoin Wallet Deposits</a></p>
                        <?php } ?>
            </div>
        </div>
        <br>
    </div>
</div>

