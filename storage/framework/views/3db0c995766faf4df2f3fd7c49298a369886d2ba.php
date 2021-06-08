<?php
   use Litepie\User\Models\Client;
   use Litecms\Plan\Models\Plan;
   use Litecms\Transactions\Models\History;
   use Litecms\Ticket\Models\Ticket;
   ?>
<div class="page-wrappehhr">
<div class="main-page">
<div class="row-one">
   <div class="col-lg-3 col-sm-4 col-md-3">
      <div class="boxdas">
         <a href="<?php echo guard_url('page/page'); ?>">
            <div class="boxdasinnf">
               <figure class="bg1"><i class="fa fa-list-ol"></i></figure>
               <section>
                  <h2>Pages</h2>
               </section>
               <div class="boxdasbottom">
                  <h3>Total Pages <label> <?php echo Page::count(); ?></label> </h3>
               </div>
            </div>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-sm-4 col-md-3">
      <div class="boxdas">
         <a href="<?php echo guard_url('plan/plan'); ?>">
            <div class="boxdasinnf">
               <figure class="bg2"><i class="far fa-file-alt"></i></figure>
               <section>
                  <h2>Plans</h2>
               </section>
               <div class="boxdasbottom">
                  <h3>Total Plans <label>  <?php echo Plan::count(); ?></label> </h3>
               </div>
            </div>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-sm-4 col-md-3">
      <div class="boxdas">
         <a href="<?php echo guard_url('user/client'); ?>">
            <div class="boxdasinnf">
               <figure class="bg3"><i class="far fa-user"></i></i></figure>
               <section>
                  <h2>Clients</h2>
               </section>
               <div class="boxdasbottom">
                  <h3>Total Clients <label>  <?php echo Client::count(); ?></label> </h3>
               </div>
            </div>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-sm-4 col-md-3">
      <div class="boxdas">
         <a href="<?php echo guard_url('ticket/ticket'); ?>">
            <div class="boxdasinnf">
               <figure class="bg4"><i class="fas fa-tags"></i></figure>
               <section>
                  <h2>Tickets</h2>
               </section>
               <div class="boxdasbottom">
                  <h3>Open Tickets <label>  <?php echo Ticket::where('ticket_status',1)->count(); ?></label> </h3>
               </div>
            </div>
         </a>
      </div>
   </div>
   <?php
      $balance = get_admin_balance();
      $curr_month_balance = get_admin_balance_current_month();
      ?>  
   <div class="col-lg-4 col-sm-4 col-md-4">
      <div class="threebox">
         <div class="animation1">
            <div class='wave -one'></div>
            <div class='wave -two'></div>
         </div>
         <a href="<?php echo guard_url('deposit/deposit'); ?>">
            <div class="boxdasinn2">
               <figure class="bg5"><i class="fas fa-piggy-bank"></i></figure>
               <section>
                  <h2>Active Deposit</h2>
               </section>
               <div class="boxdasbottom2">
                  <h3> 	Total Overall<label>  <?php echo __('plan::plan.currency_simb'); ?><?php echo e($balance['active_deposit']); ?> </label> </h3>
               </div>
            </div>
         </a>
      </div>
   </div>
   <div class="col-lg-4 col-sm-4 col-md-4">
      <div class="threebox">
         <div class="animation1">
            <div class='wave -one'></div>
            <div class='wave -two'></div>
         </div>
         <a href="<?php echo guard_url('transactions/transaction/intrest_earned'); ?>">
            <div class="boxdasinn2">
               <figure class="bg6"><i class="far fa-handshake"></i></figure>
               <section>
                  <h2>Total Interest earned</h2>
               </section>
               <div class="boxdasbottom2">
                  <h3> 	Total Overall<label><?php echo __('plan::plan.currency_simb'); ?><?php echo e($balance['intrest_earned']); ?></label> </h3>
               </div>
            </div>
         </a>
      </div>
   </div>
   <div class="col-lg-4 col-sm-4 col-md-4">
      <div class="threebox">
         <div class="animation1">
            <div class='wave -one'></div>
            <div class='wave -two'></div>
         </div>
         <a href="<?php echo guard_url('transactions/transaction/withdrawal'); ?>">
            <div class="boxdasinn2">
               <figure class="bg7"><i class="fas fa-file-invoice-dollar"></i></figure>
               <section>
                  <h2>Total Withdrawals</h2>
               </section>
               <div class="boxdasbottom2">
                  <h3>Total Overall<label><?php echo __('plan::plan.currency_simb'); ?><?php echo e($balance['withdrawal']); ?></label> </h3>
               </div>
            </div>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-sm-3 col-md-3">
      <div class="twobox">
         <div class="animation3">
            <div class='wave -one'></div>
            <div class='wave -two'></div>
         </div>
         <a href="<?php echo guard_url('transactions/transaction/commissions'); ?>">
            <figure><img src="<?php echo e(url('public/themes/admin/assets/img/characters_1.png')); ?>"></figure>
            <h2>Total Commissions</h2>
            <p><?php echo __('plan::plan.currency_simb'); ?><?php echo e($balance['commissions']); ?></p>
            </p>
      </div>
      </a>  
   </div>
   <div class="col-lg-3 col-sm-3 col-md-3">
      <div class="twobox">
         <a href="<?php echo guard_url('transactions/transaction/bonus'); ?>">
            <figure><img src="<?php echo e(url('public/themes/admin/assets/img/bonus.png')); ?>"></figure>
            <h2>Total Bonus </h2>
            <p><?php echo __('plan::plan.currency_simb'); ?><?php echo e($balance['bonus']); ?>   </p>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-sm-3 col-md-3">
      <div class="twobox">
         <a href="<?php echo guard_url('transactions/transaction/penality'); ?>">
            <figure><img src="<?php echo e(url('public/themes/admin/assets/img/Penality.png')); ?>"></figure>
            <h2>Total Penality</h2>
            <p><?php echo __('plan::plan.currency_simb'); ?><?php echo e($balance['penality']); ?></p>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-sm-3 col-md-3">
      <div class="twobox">
         <a href="<?php echo guard_url('transactions/transaction/release_deposit'); ?>">
            <figure><img src="<?php echo e(url('public/themes/admin/assets/img/ReleaseDeposit.png')); ?>"></figure>
            <h2>Release Deposit</h2>
            <p><?php echo __('plan::plan.currency_simb'); ?><?php echo e($balance['release_deposit']); ?></p>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-sm-3 col-md-3">
      <div class="twobox">
         <a href="<?php echo guard_url('transactions/transaction/wallet_credit'); ?>">
            <figure><img src="<?php echo e(url('public/themes/admin/assets/img/Wallet.png')); ?>"></figure>
            <h2>Wallet Credit</h2>
            <p><?php echo __('plan::plan.currency_simb'); ?><?php echo e($balance['wallet_credit']); ?></p>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-sm-3 col-md-3">
      <div class="twobox">
         <a href="<?php echo guard_url('transactions/transaction/wallet_debit'); ?>">
            <figure><img src="<?php echo e(url('public/themes/admin/assets/img/secondd.png')); ?>"></figure>
            <h2>Wallet Debit</h2>
            <p><?php echo __('plan::plan.currency_simb'); ?><?php echo e($balance['wallet_debit']); ?></p>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-sm-3 col-md-3">
      <div class="twobox">
         <a href="<?php echo guard_url('transactions/transaction/withdraw_pending'); ?>">
            <figure><img src="<?php echo e(url('public/themes/admin/assets/img/TotalWithdrawable.png')); ?>"></figure>
            <h2>Withdrawals Request</h2>
            <p><?php echo __('plan::plan.currency_simb'); ?><?php echo e($balance['withdraw_pending']); ?></p>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-sm-3 col-md-3">
      <div class="twobox">
         <a href="#">
            <figure><img src="<?php echo e(url('public/themes/admin/assets/img/otal.png')); ?>"></figure>
            <h2>Total Withdrawable</h2>
            <p><?php echo __('plan::plan.currency_simb'); ?><?php echo e($balance['total_withdraw_balance']); ?> </p>
         </a>
      </div>
   </div>
   <?php
      $balance = get_admin_balance();
      $curr_month_balance = get_admin_balance_current_month();
      ?> 
</div>