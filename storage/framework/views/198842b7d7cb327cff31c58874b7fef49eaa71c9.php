<!-- START newsletter -->
<?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<section class="newsletter" id="newsletter">
   <?php echo Form::vertical_open()->method('POST')->id('submitform')->action(trans_url('submit_subcribers')); ?>

 
      <div class="row">
      
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="subscribebox">
               <?php echo e($errors->first()); ?>

            
                  <?php echo Form::email('sub_email')->class('form-control person')->required()->placeholder('Your Email...')->raw(); ?>

                 
                  <button class="btn btnthemee" type="submit">Subscribe</button>
               
             
               <?php if(!empty(getCompanyinfo('google_site_key'))): ?>
               <div class="g-recaptcha" data-sitekey="<?php echo e(getCompanyinfo('google_site_key')); ?>"></div>
               <?php endif; ?>
            </div>
         </div>
      </div>
  
   <?php echo Form::close(); ?>  
</section>
<!-- END newsletter -->





<script>
   $(function() {
       $("form#submitform").validate({
         ignore:[],
       rules: {
           sub_email: {
           required: true,
            email: true
         },
          "g-recaptcha-response": {
   
               required : true,
   
               remote: {
   
                   url: '<?php echo e(url("/check_captcha")); ?>',
   
                   type: "post",
   
                   data: {
   
                       param: "registration",
   
                       _token: $('[name="_token"]').val()
   
                   }
   
               }
   
           }
      
       },
        messages: {
          
         sub_email:"Please enter valid email address",
              required: "Please provide valid email",
           
        "g-recaptcha-response": {
   
             required: "Please click on the reCAPTCHA box.",
                  remote: "Robot verification failed, please try again."
   
          }
       },
      submitHandler: function(form) {
            form.submit();
         
      }
   
    });
   
   });
   
</script>