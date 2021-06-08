<div class="headerwidget">
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "in"
}
  </script>
</div></div>
<section class="<?php echo e((Route::getCurrentRoute()->uri()=='/') ? 'header header-main' : 'header header-page inner_header'); ?>" id="header">
         <div class="headerwidget">
         <div class="tradingview-widget-container">
         <div class="heamobile">
            <div class="header-top">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">
                        <div class="logo">
                           <a href="<?php echo e(trans_url('/')); ?>">
                           <img src="<?php echo e(getCompanylogo()); ?>" alt="<?php echo e(getCompanyinfo('company_name')); ?>">
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="header-top_left">
                           <div class="social" onclick="gtag('event', 'social', {'event_category': 'social', 'event_action': 'social'});">
                              <span>follow:</span>
                              <ul>
                                  <?php if(!empty(getCompanyinfo('facebook_link'))): ?>
                                 <li><a href="<?php echo e(getCompanyinfo('facebook_link')); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                  <?php endif; ?>
                                  <?php if(!empty(getCompanyinfo('twitter_link'))): ?>
                                 <li><a href="<?php echo e(getCompanyinfo('twitter_link')); ?>"><i class="fab fa-twitter"></i></a></li>
                                 <?php endif; ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="header-top_right">
                            <?php if(!user_check('client.web')): ?>
                           <a href="<?php echo e(trans_url('client/login')); ?>" class="btn btn-bordered"><i class="lociconc"><img src="<?php echo e(url('public/themes/echyip/assets/images/login.png')); ?>" class="img-responsive"></i><span>Login</span></a>
                           <div class="btn-over">
                              <a href="<?php echo e(trans_url('client/register')); ?>" class="btn btn-yellow"><i class="lociconc"><img src="<?php echo e(url('public/themes/echyip/assets/images/createlogin.png')); ?>" class="img-responsive"></i><span>create account</span></a>
                           </div>
                          <?php else: ?>
                           <a href="<?php echo e(trans_url('client')); ?>" class="btn btn-bordered"><i class="lociconc"><img src="<?php echo e(url('public/themes/echyip/assets/images/login.png')); ?>" class="img-responsive"></i><span><?php echo e(users('name', 'client.web')); ?></span></a>
                           <div class="btn-over">
                              <a href="<?php echo e(trans_url('client/logout')); ?>" class="btn btn-yellow"><i class="lociconc"><img src="<?php echo e(url('public/themes/echyip/assets/images/createlogin.png')); ?>" class="img-responsive"></i><span>Logout</span></a>
                           </div>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           
            <div class="header-menu  mobileheader">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <nav class="navbar">
                           <div class="collapse">
                              <div class="menu_box2">
                                 <div id="mySidenav" class="sidenav menu_main2">
                                    <div class="closeee"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a></div>
                                    <ul class="nav navbar-nav header-menu headmenu">
                                       <?php echo Menu::menu('main'); ?>

                                    </ul>
                                 </div>
                                 <span class="menu_b" onclick="openNav()"><i class="fas fa-align-justify"></i></span>
                              </div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <?php if(Route::getCurrentRoute()->uri()=='/'): ?>
            <?php 
            $datacompany=getDatacompany();
            ?>
            <div class="header-middle">
               <div class="container">
                   <div class="row">
                <?php $banner = getpagesdataBySlug('banner');
                   echo $banner->content;
                    ?>
                    
                    
                     <div class="col-md-5 mobilewidth planwidth">
                        <div class="stat-box">
                           <div>
                            <div class="banner-right">
               <div class="banner-r-sec">
                  <div class="banner-r-img">
                     <img src="<?php echo e(url('public/themes/echyip/assets/images/total_clients.png')); ?>" class="img-responsive">
                  </div>
                  <div class="banner-r-cont">
                     <p>Total Client</p>
                     <h3 class="counter"><?php echo $datacompany['total_client']+ getCompanyinfo('total_client') ?></h3>
                  </div>
               </div>
              
               <div class="banner-r-sec">
                  <div class="banner-r-img">
                     <img src="<?php echo e(url('public/themes/echyip/assets/images/banner-icon-3.png')); ?>" class="img-responsive">
                  </div>
                  <div class="banner-r-cont">
                     <p>Total Deposit</p>
                     <h3 class="counter bnnr"><?php echo $datacompany['total_desposit'] + getCompanyinfo('total_deposit') ?></h3>
                  </div>
               </div>
               <div class="banner-r-sec">
                  <div class="banner-r-img">
                     <img src="<?php echo e(url('public/themes/echyip/assets/images/banner-icon-4.png')); ?>" class="img-responsive">
                  </div>
                  <div class="banner-r-cont">
                     <p>Total Withdrawal</p>
                     <h3 class="counter bnnr"><?php echo $datacompany['total_withdrawal']+ getCompanyinfo('total_withdrawal') ?></h3>
                  </div>
               </div>
            </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 
               </div>
               
                <?php
                $plans=Plan::display();
                ?> 
              <div class="header-plans">
<div class="box-calc" style="display: none;">
			  <div>
				<span class="arrow-top plan-3"></span>
				<i class="fas fa-times"></i>
				<div class="row">
				    <form>
				        <input type="hidden" name="compound" value="0">
               <input type="hidden"  id="maxinvests" name="maxinvest" value="">
               <input type="hidden"  id="plnid" name="maxinvest" value="">
               <input type="hidden"  id="mininvests" name="mininvest" value="">
               <input type="hidden" id="interests" name="interest" value="">
               <input type="hidden" name="aftermetureds" id="aftermetureds" value="">
               <input type="hidden" name="invest_dur" id="invest_durs" value="">
               <input type="hidden" name="invest_dur_type" id="invest_dur_types" value="">
				  <div class="col-md-6 col-sm-12 hellh">
					<div class="field">
					  <div class="form-group form-group-overlay">
					      <input id="amountss" onkeyup="calculate_profit_by_amttt(this.value)" class="calculate-amount"  type="number" step="any" min="" max="" >
					<label><span>deposit Amount:</span></label>
						<span class="input-label in-account-span calc-current-curr">USD</span>
					  </div>
					</div>
				  </div>
				  <div class="col-md-6 col-sm-12 hellh1">
					<ul class="result-calc-list">
					  <li>
						<i class="fas fa-calculator"></i>
						<b class="calculate-result-1"><span id="profitss"></span><span id="pro_fits"></span><small> USD</small></b>
						<p id="profit_statuss"></p>
					  </li>
					  <li>
						<i class="fas fa-credit-card"></i>
						<b class="calculate-result-2 empty"><span id="totreturnss"></span><small> USD</small></b>
						<small>TOTAL PROFIT</small>
					  </li>
					</ul>
				  </div>
				  </form>
				</div>
			  </div>
			</div>
 <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="planSlideMain">
                              <div class="owl-carousel owl-theme owl-loaded owl-drag" id="planSlide">
                                 <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                         <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <div class="owl-item active">
                                          <div class="item <?php echo $plan->name; ?>">
                                             <div>
                                                <abbr><?php echo $plan->name; ?></abbr>
                                                <div class="plan_percent">
                            					  <span class="top"><?php echo ($plan->profit); ?><small>%</small></span>
                            					  <div>
                            						<span class="bottom"><?php echo ($plan->profit); ?><small>%</small></span>
                            					  </div>
                            					</div>
                                                
                                                <div class="plan_date">
                            					  <span class="first">for</span>
                            					  <div><?php echo e($plan->investment_duration); ?></div>
                            					  <span class="last">working<br><?php echo e($plan->investment_duration_type); ?> </span>
                            					  <i class="fas fa-clock"></i>
                            					</div>
                                                <div class="plan-details">
                        						  <ul>
                        							<li><small>Min-max Deposit</small><span>$<?php echo e($plan->min_investment); ?> - $<?php echo e($plan->max_investment); ?></span></li>
                        						  </ul>
                        						  <ul class="last">
                        							<li class="even"><small>Referral</small><span>from deposit</span></li>
                        							 <li><small>Principal Return</small> <span><?php  if($plan->release_deposit == '1'){ echo 'end of the term'; }else { echo 'NA'; } ?></span></li>
                        						
                        							<li class="even"><small>Accruals</small><span><?php if($plan->week_type == 1){ echo "Monday To Friday"; }else{ echo "Monday To Sunday"; } ?></span></li>
                        						  </ul>
                        						</div>
                        					<div class="plan-btn">
                        					    
                        					  <a href="javascript:void(0);" onclick="checkplansss('<?php echo e($plan->id); ?>')">
                        					       <i data-toggle="modal" data-target="#calculatorCustom" class="fas fa-calculator"></i>
                        					  
                        					  </a>
                        					  <a href="<?php echo e(trans_url('client/plans/'.$plan->id)); ?>" class="depositanchor" tabindex="-1">
                        						<label rel="1" data-select="select" id="axaa" class="active" data-id="<?php echo e($plan->id); ?>"  data-selected="selected">
                        					  	Invest Now
                        					  </label>
                        						  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="27px" height="5px">
                        						  <path fill-rule="evenodd" opacity="0.871" fill="rgb(172, 172, 172)" d="M24.183,4.997 L22.772,4.997 L25.102,2.934 L0.008,2.934 L0.008,2.050 L25.102,2.050 L22.772,-0.013 L24.183,-0.013 L27.013,2.492 L24.183,4.997 Z"></path>
                        						  </svg>
                        					  </a>
                        					</div>
                                            <div class="priceBtn">
                                            <a data-toggle="modal" data-target="#priceBtnPopup<?php echo e($plan->id); ?>"   href="#" class="btn sfef btn-red">Learn More</a>
                        		
                        				    </div>
                                          </div>
                                       </div>
                                        </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </div>
                                 <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
                                 <div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
          </div>
          	<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- START priceBtnPopup Modal -->
<div id="priceBtnPopup<?php echo e($plan->id); ?>" class="modal fade planmodel" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="priceModal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><?php echo e($plan->name); ?> - earn <?php echo e($plan->profit); ?>% Daily </h4>
				</div>
				
				<div class="modal-body">	
					<h5>For an Investment of $<?php echo e($plan->min_investment); ?> - $<?php echo e($plan->max_investment); ?></h5>
					<p><?php echo e($plan->description); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<script>
         $('#compound').on('change', function () {
         
             calculate_profit_by_amttt($('#amountss').val());
         
         })
         
         function checkplansss(planid) {
                
                 $("#plnid").val(planid);
         
             var compound = $("#compound").val();
         
             if (compound != '')
             {
                 var compound = compound;
             } else
             {
                 var compound = 0;
             }
         
             $.ajax({
                 url: "<?php echo e(url('calculate_plannnn')); ?>",
                 type: 'POST',
                 data: {planid: planid, compound: compound},
                 success: function (data, textStatus, jqXHR)
                 {
                     var result = data.split('|');
                     console.log(result);
                     var mininvest = result[0];
                     var maxinvest = result[1];
                     var interest = result[2];
                     var interest_type = result[3];
                     var invest_dur = result[4];
                     var invest_dur_type = result[5];
                     var totreturns = result[6];
                     var profits = result[7];
                     var aftermetureds = result[8];
                     $('input[id=amountss]').val(mininvest);
                     $('#mininvests').val(mininvest);
                     $('#maxinvests').val(maxinvest);
                     $('#interests').val(interest);
                     $('#interest_type').val(interest_type);
                     $('#invest_durs').val(invest_dur);
                     $('#invest_dur_types').val(invest_dur_type);
                     $('#totreturnss').html(totreturns);
                     $('#profitss').html(profits);
                     $('#profit_statuss').html(interest_type +' Profit');
                     $('#aftermetureds').html(aftermetureds);
                     $('input[id=amountss]').attr('min', mininvest);
                     $('input[id=amountss]').attr('max', maxinvest);
         
                 },
             });
         
         }
         
         function calculate_profit_by_amttt(amount)
         {
             var planid = $("#plnid").val();

             var investment_duration = $('#invest_durs').val();
             var interest = $('#interests').val();
             var interest_am = $('#interests').val();
             var compound = $('#compound').val();
             $.ajax({
                 url: "<?php echo e(trans_url('calculate_plan_amttttttt')); ?>",
                 type: 'POST',
                 data: {'planid': planid, 'investment_duration': investment_duration, 'amount': amount, 'interest': interest, 'compound': compound},
                 success: function (data)
                 {
                     
                     var result = data.split('|');
                     var totreturns = result[0];
                     var profits = result[1];
                     //alert(totreturns);
                     var profitsss = parseInt(profits)/parseInt(investment_duration);
                     //alert(profitsss);
                     $('#totreturnss').html(totreturns);
                     $('#profitss').html(profits);
                 }
             });
         }
         
         $(function () {
             checkplansss();
             $("input[id=amountss]").change(function () {
                 var max = parseInt($(this).attr('max'));
                 var min = parseInt($(this).attr('min'));
                 if ($(this).val() > max)
                 {
                     $(this).val(max);
                     val = max;
                 } else if ($(this).val() < min)
                 {
                     $(this).val(min);
                     val = min;
                 } else {
                     val = $(this).val();
                 }
                 calculate_profit_by_amttt(val);
             });
         
         });
         
         function openCalculator()
         {
             id = $('#plnid').val();
             w = 225;
             h = 400;
             t = (screen.height - h - 30) / 2;
             l = (screen.width - w - 30) / 2;
             window.open("<?php echo e(trans_url('calculate')); ?>" + '/' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" + w + ",height=" + h + ",resizable=1,scrollbars=0");
         
         
         
             for (i = 0; i < document.spendform.h_id.length; i++)
             {
                 if (document.spendform.h_id[i].value == id)
                 {
                     document.spendform.h_id[i].checked = true;
                 }
             }
         
         }
         
         function updateCompound() {
             var id = 0;
             var tt = document.spendform.h_id.type;
             if (tt && tt.toLowerCase() == 'hidden') {
                 id = document.spendform.h_id.value;
             } else {
                 for (i = 0; i < document.spendform.h_id.length; i++) {
                     if (document.spendform.h_id[i].checked) {
                         id = document.spendform.h_id[i].value;
                     }
                 }
             }
         
             var cpObj = document.getElementById('compound_percents');
             if (cpObj) {
                 while (cpObj.options.length != 0) {
                     cpObj.options[0] = null;
                 }
             }
         
             if (cps[id] && cps[id].length > 0) {
                 document.getElementById('coumpond_block').style.display = '';
         
                 for (i in cps[id]) {
                     cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                 }
             } else {
                 document.getElementById('coumpond_block').style.display = 'none';
             }
         }
         var cps = {};
      </script>
           <?php endif; ?>
         </div>
      </section>
      

<script>
$('.counter').counterUp({
delay: 10,
time: 2000
});
$('.counter').addClass('animated fadeInDownBig');
$('h3').addClass('animated fadeIn');   
</script>	

 <script>
function openNav() {
   document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
   document.getElementById("mySidenav").style.width = "0";
   window.onload = function () {window.location.reload()};
}
</script>

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">