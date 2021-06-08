<script src='https://www.google.com/recaptcha/api.js'></script>


<section class="main main-page">
   <div class="main-about p-t-0">
      <div class="container">
      <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         <div class="row">
            <div class="col-md-12">
               <h2 class="title">
                  <small>feedback</small>
                  <div><span>Contact</span>  Us</div>
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-6">
                     <div class="page-form-box">
                         <?php echo Form::vertical_open()->id('send-message')->method('POST')->class('contt')->action(trans_url('contact/sendmail')); ?>

                           <div class="row">
                              <div class="col-md-12">
                                 <div class="field">
                                    <div class="form-group form-group-overlay">
                                         <?php echo Form::text('name')->class('form-control cp tags spchar name')->raw(); ?>

                                       <label><span>Enter Name:</span>
                                       </label> <span class="input-label with-icons"><i class="contact"><img src="<?php echo e(url('public/themes/echyip/assets/images/user.png')); ?>" class="img-responsive"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="field">
                                    <div class="form-group form-group-overlay">
                                        <?php echo Form::email('email')->class('form-control tags cp')->raw(); ?>

                                       <label><span>Enter e-mail:</span>
                                       </label> <span class="input-label with-icons"><i class="contact"><img src="<?php echo e(url('public/themes/echyip/assets/images/email.png')); ?>" class="img-responsive"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="field">
                                    <div class="form-group form-group-overlay">
                                        <?php echo Form::text('mobile')->class('form-control cp tags numberval')->raw(); ?> 
                                       <label><span>Enter phone Number:</span>
                                       </label> <span class="input-label with-icons"><i class="contact"><img src="<?php echo e(url('public/themes/echyip/assets/images/phone.png')); ?>" class="img-responsive"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="field">
                                    <div class="form-group form-group-overlay">
                                        <?php echo Form::text('subject')->class('form-control cp tags spchar')->raw(); ?>

                                       <label><span>Enter Subject:</span>
                                       </label> <span class="input-label with-icons"><i class="contact"><img src="<?php echo e(url('public/themes/echyip/assets/images/topic.png')); ?>" class="img-responsive"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="field">
                                    <div class="form-group form-group-overlay">
                                       <?php echo Form::textarea('message')->class('form-control tags spchar cp')->rows(4)->raw(); ?> 
                                       <label><span>Enter message:</span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="field">
                                   <div class="form-group form-group-overlay">
                               <?php if(!empty(getCompanyinfo('google_site_key'))): ?>
                           <div class="g-recaptcha" data-sitekey="<?php echo e(getCompanyinfo('google_site_key')); ?>"></div>
                              <?php endif; ?>
                           </div>
                           </div>
                           </div>
                           </div>
                           
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group form-group-submit m-b-0">
                                    <div class="cotactbtn">
                                       <button class="btn btn-submit btn-yellow" type="submit">Send</button> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                         <?php echo Form::close(); ?>

                     </div>
                  </div>
                  <?php if(!empty(getCompanyinfo('company_map'))): ?>
                  <div class="col-md-6">
                     <div class="map-box">
                         <iframe src="<?php echo e(getCompanyinfo('company_map')); ?>" style="border:0" allowfullscreen="" width="100%" height="250" frameborder="0"></iframe>
                       					
                     </div>
                  </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="main-bottom contactnone">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="psys-items psys-items-bottom">
                  <ul>
                     <li>
                        <a href="#" target="_blank" class="item-1">
                           <div class="first"></div>
                           <div class="last"></div>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank" class="item-2">
                           <div class="first"></div>
                           <div class="last"></div>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank" class="item-3">
                           <div class="first"></div>
                           <div class="last"></div>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank" class="item-4">
                           <div class="first"></div>
                           <div class="last"></div>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank" class="item-5">
                           <div class="first"></div>
                           <div class="last"></div>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank" class="item-6">
                           <div class="first"></div>
                           <div class="last"></div>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank" class="item-7">
                           <div class="first"></div>
                           <div class="last"></div>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank" class="item-8">
                           <div class="first"></div>
                           <div class="last"></div>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank" class="item-9">
                           <div class="first"></div>
                           <div class="last"></div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<script>
   $(function() {
       $("form#send-message").validate({
       	ignore:[],
       rules: {
           email: {
           required: true,
            email: true
         },
         name: {
           required: true,
           minlength: 2,
           maxlength:20
         },
          mobile: {
          required: true,
          maxlength:14,
          number: true
        },
          subject: {
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
   
           },
          message: {
           required: true
          
         }
       },
        messages: {
          name:{
           required: "Please enter name",
           minlength: "Your name must be at least 2 characters long",
           maxlength: "Your name must be less than 20 characters long"
          },
           mobile: {
          required: "Your phone number must be required",
          minlength: "Your phone number must be at least 10 characters long",
          maxlength: "Your phone number must be less than 10 characters long",
          number: "It should be numeric"
          },
           
         email: "Please enter valid email address",
       
         subject: {
           required: "Please enter subject"
          
         },
        
         "g-recaptcha-response": {
   
             required: "Please click on the reCAPTCHA box.",
                  remote: "Robot verification failed, please try again."
   
          },
          message: {
           required:"Please enter message"
          
         }
          },
        submitHandler: function(form) {
             form.submit();
          
   
      }
   
    });
   
   });
   
</script>