
<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title plans-heading">Investment Plans</h6>
    </div>
    <div class="panel-body">


        <!-- <a href="/refund/">Learn More</a>. -->

        <div class="container-fluid  col-md-12">
            <div class="container-fluid  col-md-8">

                <?php echo Form::open()
                ->class('form-horizontal form-groups-bordered')
                ->id('plan-pay')
                ->method('POST')            
                ->action(guard_url('paynow')); ?>

                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-sm-6 control-label"><strong>Choose your Plan: </strong><span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <?php echo Form::select('plan_id')->value($pid)->options($plans)->label(false); ?>              
                            </div>
                        </div>                              
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-sm-6 control-label"><strong>Enter Amount (<?php echo __('plan::plan.currency_simb'); ?>): </strong><span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <?php echo Form::decimal('amount')
                                -> label(false)
                                -> required()
                                -> placeholder(trans('deposit::deposit.placeholder.amount')); ?>


                                <span id="amt_limit">
                                </span>
                            </div>
                        </div>                        
                    </div>
                    <?php if(getAddonsinfo('hide_compound_rate') ==0): ?>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-sm-6 control-label"><strong>Compound rate (%): </strong><span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <?php echo Form::select('compound_rate')
                                -> options(range(0,100))                                
                                -> label(false); ?>                               
                            </div>
                        </div>                        
                    </div>  
                    <?php else: ?>
                    <input type="hidden" name="compound_rate" value="0">
                    <?php endif; ?>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-sm-6 control-label"><strong>Choose Payment Gateway: </strong><span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <?php echo Form::select('currency_thro')
                                 ->options($options)
                                -> required()
                                -> label(false); ?>                               
                            </div>
                        </div>                        
                    </div>                        
                    <input type="hidden" name="minamt" id="minamt" value="">
                    <input type="hidden" name="maxamt" id="maxamt" value="">                        
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-sm-6"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="sbtn" class="btn btn-primary" value="Pay">
                            </div>
                        </div>

                    </div>

                </div>
                </form>          
            </div>
        </div>
        <br>
    </div>
</div>
<script>
    $('document').ready(function(){
       if($('#plan_id').val()!=''){
    $.getJSON('<?php echo guard_url('getplan'); ?>/' + $('#plan_id').val(), function(v, s){
    $('#amt_limit').text('<?php echo __('plan::plan.currency_simb'); ?>' + v.minin + ' - <?php echo __('plan::plan.currency_simb'); ?>' + v.maxin);
    $('#amount').val(v.minin);
    $('#minamt').val(v.minin);
    $('#maxamt').val(v.maxin);
    });
       }
    $('#plan_id').change(function(){
    $.getJSON('<?php echo guard_url('getplan'); ?>/' + $(this).val(), function(v, s){
    $('#amt_limit').text('<?php echo __('plan::plan.currency_simb'); ?>' + v.minin + ' - <?php echo __('plan::plan.currency_simb'); ?>' + v.maxin);
    $('#amount').val(v.minin);
    $('#minamt').val(v.minin);
    $('#maxamt').val(v.maxin);
    });
    });
    $('#plan-pay').submit(function(e){
        var val = ($('#amount').val());
        var min_val = $('#minamt').val();
        var max_val = $('#maxamt').val();
        
        if(parseFloat(val)<parseFloat(min_val)){
            $('#amount').val(min_val);
        }
        else if(parseFloat(val)>parseFloat(max_val)){
            $('#amount').val(max_val);
        }
       
    });
    });
</script>
