<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
section.header.header-page {display: none;}
footer {	display: none;}
section.main.main-form {min-height: 625px;overflow: hidden;}
</style>

<script src='https://www.google.com/recaptcha/api.js'></script>
<section class="main main-form loginWak cutomLogin">
   <div class="main-about p-t-0 accountpadding">
      <div class="container">
         <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 account_common">
      
                   <div class="loginboximg">
                 <h2 class="accountittle">Login account</h2>
               
                   <div class="logintitle"> <p> if you don't have account <a href="<?php echo e(url('client/register')); ?>">Create</a></p></div>
                    <div class="logintitle2"><p><a href="<?php echo e(guard_url('password/reset')); ?>"  class="f_pass">Forgot password?</a></p> </div>
                   
          
            </div>
               <div class="main-about_inset  loginbox">
                      <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="backyp"><p><a href="<?php echo e(trans_url('/')); ?>"  class="f_pass"><i class="fas fa-long-arrow-alt-left"></i>  Back to Home</a></p> </div>
          </div>
					 <?php echo Form::vertical_open()
						 ->class('login-form')
                       ->id('login')
                       ->method('POST'); ?>

    <?php if($errors!='[]'): ?>
    <div class="alert alert-danger">               
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($error); ?><br/>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
    <div class="logIn">
		<?php if(isset($request)): ?>
	
		<h2>Enter 2FA Code, You have received</h2>
<?php
		$password=$request->password;
		$hidden='hidden';
		
	?>

		<div class="form-group required" aria-required="true">
		<?php echo Form::text('facode')->class('form-control')->placeholder('Enter two FA Code')->required()->raw(); ?>

		</div>

<?php else: ?>
		<h2> <span>Login</span></h2>
						</div>
	<?php
		$password='';
		$hidden='';
	?>
<?php endif; ?>
        
        
       <div class="field <?php echo e($hidden); ?>">
                        <div class="form-group form-group-overlay  ">
                     <?php echo Form::email('email')
                     ->class('form-control')
                     ->label(false)
                     ->placeholder('')
                     ->required()
                     ->raw(); ?>

                           <label><span>Your E-mail</span></label><span class="input-label with-icons"><i class="icuser"><img src="<?php echo e(asset('public/themes/echyip/assets/images/icon1.png')); ?>" class="img-responsive"></i></span>
                        </div>
                     </div>
       <div class="field <?php echo e($hidden); ?>">
                        <div class="form-group form-group-overlay ">
                           <input class="form-control" placeholder="" required="" id="password" type="password" name="password" value="<?php echo e($password); ?>">
                           <label><span>Your password</span>
                           </label><span class="input-label with-icons"><i class="icuser"><img src="<?php echo e(asset('public/themes/echyip/assets/images/lock.png')); ?>" class="img-responsive"></i></span>
                          
                        </div>
                     </div>
        <div class="field">
            <div class="form-group">
                <?php if((getCompanyinfo('captcha_client_login')==1)): ?>
                  <?php if(!empty(getCompanyinfo('google_site_key'))): ?>
                  <div class="g-recaptcha" data-sitekey="<?php echo e(getCompanyinfo('google_site_key')); ?>" ></div>
                  <?php endif; ?>
                  <?php endif; ?>
                        </div>
                     </div>
             <div class="bbtbb">
                        <input name="login_frm_btn" value="Enter account" type="submit" class="btn btn-submit btn-red" id="login">
                     </div>
			
      
         <?php echo Form::close(); ?>

    </div>
         </div>
      </div>
   </div>
   </div>
</section>
<script>
$(function() {
   $("form#login").validate({
   rules: {
       email: {
       required: true,
        email: true
     },
     password: {
       required: true,
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
        password: {
       required: "Please enter password",
       },
     email: "Please enter valid email address",
     "g-recaptcha-response": {

          required: "Please click on the reCAPTCHA box.",
               remote: "Robot verification failed, please try again."

       }
    },
   submitHandler: function(form) {

       if (grecaptcha.getResponse()) {

            form.submit();

       } else {

           alert("Please fill captcha")

       }

   }

 });

});

</script>
