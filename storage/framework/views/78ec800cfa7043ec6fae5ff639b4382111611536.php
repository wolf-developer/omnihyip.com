<style>
section.header.header-page {display: none;}
footer {	display: none;}
section.main.main-form {min-height: 625px;overflow: hidden;}


</style>


<section class="main main-form loginWak cutomLogin">
   <div class="main-about p-t-0 accountpadding">
      <div class="container">
        <div class="row">
             
            
             
      <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 account_common ">
           <div class="loginboximg">
                   <h2 class="accountittle"><div>Forgot Password</div></h2>
                   <div class="logintitle"> <p> if you have account <a href="<?php echo e(url('client/login')); ?>">Login</a></p></div>
                   
</div> 
             <div class="main-about_inset  loginbox resett">
                       <div class="col-lg-12 col-md-12 col-sm-12 ">
                             <div class="backyp"><p><a href="<?php echo e(trans_url('/')); ?>"  class="f_pass"><i class="fas fa-long-arrow-alt-left"></i>  Back to Home</a></p> </div>
                        </div>
                     <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::vertical_open()
                    ->class('login-form')
                    ->id('reset')
                    ->action(guard_url('password/email'))
                    ->method('POST'); ?>

                    <?php if(Session::has('status')): ?>
                    <div class="alert alert-info">
                        <?php echo Session::pull('status');; ?>

                    </div>
                    <?php else: ?>
                    <?php endif; ?>
                    
                    
                     <div class="field">
                        <div class="form-group form-group-overlay  ">
                                <?php echo Form::email('email')
                                    ->required()
                                    ->class('form-control')
                                    ->label(false)
                                    ->placeholder('')
                                    ->raw(); ?>

                           <label><span>Your E-mail</span></label><span class="input-label with-icons"><i class="icuser"><img src="<?php echo e(asset('public/themes/echyip/assets/images/icon1.png')); ?>" class="img-responsive"></i></span>
                        </div>
                     </div>
                     <div class="field">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <div class="bbtbb">
                                    <button type="submit" class="btn btn-submit btn-yellow">Send</button>
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

@media (max-width: 767px) {
.col-md-7 {
    width:100%;
    float: none;
}

}
</style>
<script>
$(function() {
    $("form#reset").validate({
    rules: {
        email: {
        required: true,
         email: true
      }
     },
     messages: {
         
      email: "Please enter valid email address"
  },
    
     submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
