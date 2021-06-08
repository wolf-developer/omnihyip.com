 <?php 
$calculator_profit=Plan::calculator();
?>
<div class="main-partner">
    <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <h2 class="title title1 progreamtittl">
            <small> Subscribe</small>
            <div class="protittle">
            <span>Our</span> Newsletter 
            </div>
            </h2>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <?php echo Theme::partial('subscriber_form'); ?>

        </div>
    </div>
</div>
<div class="plancalulator">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12">
                <div class="calinner">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="calcuing bounce-13">
                            <img src="<?php echo asset('public/themes/echyip/assets/images/calculator2.png'); ?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="calculatouter">
                            <h2 class="title title1 progreamtittl">
                                <small> Calculator </small>
                                <div class="protittle">
                                    <span>Calculate</span> Profits 
                                </div>
                            </h2>
                            <form>
                            <div class="planforminn3">
                            <div class="form-group">
                            <input id="amounts" class="form-control tags cp"  type="number" step="any" min="" max="" onkeyup="calculate_profit_by_amt(this.value)">
                            </div>
                            <div class="form-group">
                            <select name="hyipplans" id="hyipplans" class="form-control" onChange="checkplans()">
                            <?php $__currentLoopData = $calculator_profit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($plan->id); ?>"><?php echo e($plan->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <input type="hidden" name="compound" value="0">
                            <div class="form-group" style="display: none;">
                            <label for="sel1">Minimum Investment:</label>
                            <div class="min-investment form-control">$<span id="mininvest"></span></div>
                            </div>
                            
                            <div class="form-group"  style="display: none;">
                            <label for="sel1">Maximum Investment:</label>
                            <div class="min-investment form-control">$<span id="maxinvest"></span></div>
                            </div>
                            <div class="form-group" style="display: none;">
                            <label for="sel1">Interest:</label>
                            <div class="min-investment form-control">
                            <span id="interest"></span>% <span id="interest_type"></span>
                            <span id="aftermetured"></span><span id="after_metured"></span>
                            </div>
                            <div class="form-group" style="display: none;">
                            <label for="sel1">Investment Length:</label>
                            <div class="min-investment form-control">
                            <span id="invest_dur"></span> <span id="invest_dur_type"></span>
                            </div>
                            </div>
                            </div>
                            </div>  </div>
                            <div class="planformtext">
                            <ul>
                            <li>
                            <h3><span id="profits"></span><span id="pro_fits"></span>$</h3>
                            <p id="profit_status"></p>
                            </li>
                            <li>
                            <h3><span id="totreturns"></span>$</h3>
                            <p>Total Profit</p>
                            </li>
                            </ul>
                            </div>
                            </div>
                            </form>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>


 
 
 
 <section class="main">
         <div class="main-refsys">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-sm-4 fullwidth col-md-4 wow slideInLeft">
                     <h2 class="title title1 progreamtittl">
                        <small>for Referral</small>
                        <div class="protittle">
                           <span>Referral</span> program 
                        </div>
                     </h2>
                     <div class="main-refsys_text">
                     </div>
                  </div>
                  <div class="col-lg-8 col-sm-8 col-md-8 referse">
                     <div class="main-refsys_list referbox">
                   
                        <ul>
                        <?php $refer = getCompanyinfo('maxreferral'); 
                          $i=1;
                         for($i=1; $i<=$refer; $i++){ ?>
                        <li class="wow slideInUp">
                              <span><abbr class="counter-value notranslate"><?php echo e(get_ref_level($i)); ?></abbr><small>%</small></span>
                              <small>Level <?php echo e($i); ?></small>
                              <i><img src="<?php echo e(url('public/themes/echyip/assets/images/refsys-level-1.png')); ?>"></i>
                           </li>
                          <?php } ?>
                           
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
          <?php $homeabout = getpagesdataBySlug('home-about');
            echo $homeabout->content;
           ?>
      </section>     
   <script>
         $('#compound').on('change', function () {
        
             calculate_profit_by_amt($('#amounts').val());
         
         })
         
         function checkplans() {
         
             var planid = $('#hyipplans').val();
             
         
             var compound = $("#compound").val();
         
             if (compound != '')
             {
                 var compound = compound;
             } else
             {
                 var compound = 0;
             }
         
             $.ajax({
                 url: "<?php echo e(url('calculate_plan')); ?>",
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
                     var aftermetured = result[8];
                     $('input[id=amounts]').val(mininvest);
                     $('#mininvest').val(mininvest);
                     $('#maxinvest').val(maxinvest);
                     $('#interest').val(interest);
                     $('#interest_type').val(interest_type);
                     $('#profit_status').html(interest_type +' Profit');
                     $('#invest_dur').val(invest_dur);
                     $('#invest_dur_type').val(invest_dur_type);
                     $('#totreturns').html(totreturns);
                     $('#profits').html(profits);
                     $('#aftermetured').html(aftermetured);
                     $('input[id=amounts]').attr('min', mininvest);
                     $('input[id=amounts]').attr('max', maxinvest);
                     
                    
                     
                 },
             });
         
         }
          
         
         function calculate_profit_by_amt(amount)
         {
             var planid = $('#hyipplans').val();
             var investment_duration = $('#invest_dur').val();
             var interest = $('#interest').val();
             var interest_am = $('#interest').val();
             var compound = $('#compound').val();
             $.ajax({
                 url: "<?php echo e(trans_url('calculate_plan_amt')); ?>",
                 type: 'POST',
                 data: {'planid': planid, 'investment_duration': investment_duration, 'amount': amount, 'interest': interest, 'compound': compound},
                 success: function (data)
                 {
                     var result = data.split('|');
                     var totreturns = result[0];
                     var profits = result[1];
                    
                     $('#totreturns').html(totreturns);
                     $('#profits').html(profits);
                 }
             });
         }
         
         $(function () {
             checkplans();
             $("input[id=amounts]").change(function () {
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
                 calculate_profit_by_amt(val);
             });
         
         });
         
         function openCalculator()
         {
             id = $('#hyipplans').val();
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