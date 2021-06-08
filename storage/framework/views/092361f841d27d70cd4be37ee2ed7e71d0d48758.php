<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
section.header.header-page {display: none;}
footer {	display: none;}
section.main.main-form {min-height: 625px;overflow: hidden;}


</style>
<section class="main main-form loginWak cutomLogin">
   <div class="main-about p-t-0 accountpadding">
      <div class="container">
         <div class="row">
          
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 account_common">
                
                <div class="loginboximg">
                   <h2 class="accountittle">Register account</h2>
                      <div class="logintitle"> <p> if you  have account <a href="<?php echo e(url('client/login')); ?>">Login</a></p></div>
                    </div> 
                <div class="main-about_inset  register">
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="backyp"><p><a href="<?php echo e(trans_url('/')); ?>"  class="f_pass"><i class="fas fa-long-arrow-alt-left"></i>  Back to Home</a></p> </div>
                        </div>
                  <?php echo Form::vertical_open(guard_url('register'))
				  ->class('login-form')
                    ->id('register')
                    ->method('POST'); ?>

                    <?php echo Form::hidden('by_referral_code',$id); ?>

                     <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                     <div class="field col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group form-group-overlay">
                                 <?php echo Form::text('name')
                                ->required()
                                ->class('form-control')
                                ->placeholder('')
                                ->raw(); ?>

                                 <label><span>Your Name:</span>
                                 </label><span class="input-label with-icons"><i class="icuser"><img src="<?php echo e(url('public/themes/echyip/assets/images/icon1.png')); ?>" class="img-responsive"></i></span>                                           
                              </div>
                           </div>
                        </div>
                     </div>
                      <div class="field col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group form-group-overlay">
                                 <?php echo Form::email('email')
                                ->required()
                                ->class('form-control tags cp')
                                ->raw(); ?>

                                 <label><span>Your e-mail:</span>
                                 </label><span class="input-label with-icons"><i class="icuser"><img src="<?php echo e(url('public/themes/echyip/assets/images/email.png')); ?>" class="img-responsive"></i></span>
                              </div>
                           </div>
                        </div>
                     </div>
 
                    
                      <div class="field col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group form-group-overlay">
                                <?php echo Form::password('password')
                                ->required()
                                ->class('form-control')
                                ->placeholder('')
                                ->raw(); ?>

                                 <label><span>Password:</span>
                                 </label><span class="input-label with-icons"><i class="icuser"><img src="<?php echo e(url('public/themes/echyip/assets/images/lock.png')); ?>" class="img-responsive"></i></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     

                    <div class="field col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group form-group-overlay">
                                 <?php echo Form::password('password_confirmation')
                                ->class('form-control')
                                ->placeholder('')
                                ->required()
                                ->raw(); ?>

                                 <label><span>Confirm Password:</span>
                                 </label><span class="input-label with-icons"><i class="icuser"><img src="<?php echo e(url('public/themes/echyip/assets/images/lock.png')); ?>" class="img-responsive"></i></span>                                           
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="field col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group form-group-overlay">
                                <?php echo Form::text('by_referral_code')
                                ->label('Referral Code')
                                ->forceValue($id)
                                ->class('form-control')
                                ->placeholder(' ')
                                ->raw(); ?>

                                 <label><span>Referral Code:</span>
                                 </label><span class="input-label with-icons"><i class="icuser"><img src="<?php echo e(url('public/themes/echyip/assets/images/referal.png')); ?>" class="img-responsive"></i></span>                                              
                              </div>
                           </div>
                        </div>
                     </div>

                  
                <div class="field col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group catpachbox">
                                  <?php if((getCompanyinfo('captcha_client_reg')==1)): ?>
                                    <?php if(!empty(getCompanyinfo('google_site_key'))): ?>
                                    <div class="g-recaptcha" data-sitekey="<?php echo e(getCompanyinfo('google_site_key')); ?>"></div>
                                    <?php endif; ?>
                                    <?php endif; ?>
                              </div>
                           </div>
                        </div>
                     </div>
              <div class="field col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <div class="checkbox">
                                    <input name="terms" type="checkbox" required="true">
					<label class="control-label"> I accept the <a target="_blank" href="<?php echo e(trans_url('TermsAndConditions.html')); ?>">Terms and Conditions</a><span style="color:#FF0000;">*</span> </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                       <div class="fieldddv col-lg-6 col-md-12 col-sm-12">
              
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group form-group-submit">
                                 <div class="bbtbb">
                                    <input  class="btn btn-submit btn-red" type="submit" value="Sign up" id="registerbtn">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  
               </div>
             <?php echo Form::close(); ?>

            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<style>

    input[type="checkbox"]:not(:checked), input[type="checkbox"]:checked {
        position: static; 
        left: 0px; 
        opacity: 1; 
    }
</style>

<script>
$(function() {
   $("form#register").validate({
    ignore:[],
   rules: {
	   name:{
        required:true,
        minlength:2,
        maxlength:32
        
    },
        email: {
        required: true,
         email: true
         
      },
      password: {
        required: true,
        minlength:6
      },
      password_confirmation: {
        required: true,
        equalTo:'#password'
      
    },
    
    select: {
	
	        required: true
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
        name:{
        required: "Please enter name",
        minlength: "Your name must be at least 2 characters long",
        maxlength: "Your name must be less than 32 characters long"
       },
       
       email: {
           required: "Please enter email",
           email: "Please enter valid email address"
       },
        
        password: {
        required: "Please enter password",
        minlength: "Your password must be at least 6 characters long"
       
        },
        password_confirmation : {
        required: "Please enter confirm password",
        equalTo: "Please enter the same password as above"
    },
    select: {
	
	        required: "Please accept terms & conditions"
	      },
    
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


