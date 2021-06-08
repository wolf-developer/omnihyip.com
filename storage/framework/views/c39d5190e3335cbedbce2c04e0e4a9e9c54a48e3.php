
<footer>
         <div class="footer-menu">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <nav class="navbar">
                        <div class="collapse" aria-expanded="false">
                           <ul class="nav navbar-nav header-menu">
                              <?php echo Menu::menu('policies'); ?>

                              <?php echo Menu::menu('footer'); ?>	
                          </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-middle">
            <div class="container">
               <div class="row">
                  <div class="col-md-5 fullwidth">
                     <div class="location2">
                       <ul>
                           <li>
                     <i class="housee"> <img src="<?php echo e(url('public/themes/echyip/assets/images/homebottom.png')); ?>" class="img-responsive"></i>
                         <?php if(!empty(getCompanyinfo('company_address'))): ?>
                          <aside>
                          <span><?php echo e(getCompanyinfo('company_address')); ?></span>
                         
                           </aside>
                         </li>
                           <?php endif; ?>
                             <li>
                               <i class="housee"> <img src="<?php echo e(url('public/themes/echyip/assets/images/homebottom.png')); ?>" class="img-responsive"></i>
                          <?php if(!empty(getCompanyinfo('company_email'))): ?>
                           <aside><span><?php echo e(getCompanyinfo('company_email')); ?></span>
                       
                           </aside>
                              </li>
                           <?php endif; ?>
                        </ul>
                     </div>
                     <div class="paymentMethod">
                        <ul>
                            <?php
                            $images=getCompanyinfo('company_method_logo');
                            if($images!=''){
                            $col=round(12/count($images));
                            }
                            ?>
                            <?php if(!empty($images)): ?>
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li><img class="img-responsive" src="<?php echo asset('storage/uploads/'.$img['path']); ?>"></li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-7 fullwidth">
                     <div class="office-slider_overlay">
                        <div class="sliderOverlay">
                           <div class="row">
                              <div class="owl-carousel owl-theme owl-loaded owl-drag" id="slider_overlay">
                                 <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                       <div class="owl-item">
                                          <div class="item">
                                             <div class="sliderOverlayInner">
                                                <a class="thumbnail fancybox" rel="ligthbox" data-fancybox="gallery" href="<?php echo e(url('public/themes/echyip/assets/images/g8.jpg')); ?>" alt="">
                                                <img src="<?php echo e(url('public/themes/echyip/assets/images/g8.jpg')); ?>" alt="">
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                     
                                       
                                       
                                       
                                       
                                       
                                        <div class="owl-item">
                                        <div class="item">
                                             <div class="sliderOverlayInner">
                                                <a class="thumbnail fancybox" rel="ligthbox" data-fancybox="gallery" href="<?php echo e(url('public/themes/echyip/assets/images/g1.jpg')); ?>" alt="">
                                                <img src="<?php echo e(url('public/themes/echyip/assets/images/g1.jpg')); ?>" alt="">
                                                </a>
                                             </div>
                                          </div>
                                         </div>
                                       <!--<div class="owl-item" >-->
                                       <!--   <div class="item">-->
                                       <!--      <div class="sliderOverlayInner">-->
                                       <!--         <a class="thumbnail fancybox" rel="ligthbox" data-fancybox="gallery" href="<?php echo e(url('public/themes/echyip/assets/images/g2.jpg')); ?>" alt="">-->
                                       <!--         <img src="<?php echo e(url('public/themes/echyip/assets/images/g2.jpg')); ?>" alt="">-->
                                       <!--         </a>-->
                                       <!--      </div>-->
                                       <!--   </div>-->
                                       <!--</div>-->
                                      <div class="owl-item" >
                                          <div class="item">
                                             <div class="sliderOverlayInner">
                                                <a class="thumbnail fancybox" rel="ligthbox" data-fancybox="gallery" href="<?php echo e(url('public/themes/echyip/assets/images/g3.jpg')); ?>" alt="">
                                                <img src="<?php echo e(url('public/themes/echyip/assets/images/g3.jpg')); ?>" alt="">
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    
                                       
                                       
                                 </div>
                                 <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                                 <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="btn-over">
                        <a href="<?php echo e(trans_url('contact.htm')); ?>" class="btn btn-yellow"><i class="feedback"> <img src="<?php echo e(url('public/themes/echyip/assets/images/feedback.png')); ?>" class="img-responsive"></i><span>feedback form</span></a>
                     </div>
                     
                  </div>
               </div>
            </div>
            <div class="footer-bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4 fullwidth col-sm-4 col-md-3">
                        <div class="logo">
                           <a href="<?php echo e(trans_url('/')); ?>">
                           <img src="<?php echo e(getCompanylogo()); ?>" alt="<?php echo e(getCompanyinfo('company_name')); ?>">
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-4 fullwidth col-sm-4 col-md-5">
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
                     <div class="col-lg-4 fullwidth col-sm-4 col-md-4">
                        <div class="copyright">
                            <span>© Copyright <?php echo e(date('Y',strtotime(getCompanyinfo('company_start')))); ?> <?php echo e(getCompanyinfo('company_legal_name')); ?></span>.  <br>All rights reserved.
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
<!--	End Footer	-->
<script>
$('.counter').countUp();
      </script>
      <script>
         wow = new WOW(
           {
             animateClass: 'animated',
             offset:       100,
             callback:     function(box) {
               console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
             }
           }
         );
         wow.init();
         document.getElementById('moar').onclick = function() {
           var section = document.createElement('section');
           section.className = 'section--purple wow fadeInDown';
           this.parentNode.insertBefore(section, this);
         };
      </script>
      <script>
         $(document).ready(function(){
   
         $(".fancybox").fancybox({
          openEffect: "none",
          closeEffect: "none"
         });
         });
         
         
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
   
    
      <!-- START main-partner -->	
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
         	  $('#owl-carousel-two').owlCarousel({
         		loop: true,
         		margin: 10,
         		 autoplay:true,
         		responsiveClass: true,
         		responsive: {
         		  0: {
         			items: 1,
         			nav: true
         		  },
         		  390: {
         			items: 2,
         			nav: false
         		  },
         		  
         		   481: {
         			items: 3,
         			nav: false
         		  },
         		  1000: {
         			items: 4,
         			nav: true,
         			loop: false,
         			margin: 50
         		  }
         		}
         	  })
           $('.play').on('click', function() {
         	owl.trigger('play.owl.autoplay', [1000])
           })
           $('.stop').on('click', function() {
         	owl.trigger('stop.owl.autoplay')
           })
         })
      </script>
      <!-- End main-partner -->
      <!-- START testimonials -->	
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
         	  $('#testimonials').owlCarousel({
         		loop: true,
         		margin: 10,
         		 autoplay:true,
         		responsiveClass: true,
         		responsive: {
         		  0: {
         			items: 1,
         			nav: true
         		  },
         		  390: {
         			items: 2,
         			nav: false
         		  },
         		  
         		   481: {
         			items: 3,
         			nav: false
         		  },
         		  1000: {
         			items: 5,
         			nav: true,
         			loop: false,
         			margin: 50
         		  }
         		}
         	  })
           $('.play').on('click', function() {
         	owl.trigger('play.owl.autoplay', [1000])
           })
           $('.stop').on('click', function() {
         	owl.trigger('stop.owl.autoplay')
           })
         })
      </script>
      <!-- End testimonials -->
      <!-- START slider_overlay -->	
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
         	  $('#slider_overlay').owlCarousel({
         		loop: true,
         		margin: 10,
         		
         		responsiveClass: true,
         		responsive: {
         		  0: {
         			items: 1,
         			autoplay:true,
         			nav: true
         		  },
         		 389: {
         			items: 2,
         			autoplay:true,
         			nav: false
         		  },
         		  
         		  
         		   480: {
         			items: 3,
         			autoplay:true,
         			nav: false
         		  },
         		  1000: {
         			items: 3,
         			nav: true,
         			autoplay:false,
         			loop: false,
         			margin: 20
         		  }
         		}
         	  })
           $('.play').on('click', function() {
         	owl.trigger('play.owl.autoplay', [1000])
           })
           $('.stop').on('click', function() {
         	owl.trigger('stop.owl.autoplay')
           })
         })
      </script>
      <!-- End slider_overlay -->
      <!-- START planSlide -->	
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
         	  $('#planSlide').owlCarousel({
         		loop: true,
         		margin: 10,
         		 autoplay:false,
         		responsiveClass: true,
         		responsive: {
         		  0: {
         			items: 1,
         			nav: true
         		  },
         		  481: {
         			items: 2,
         			nav: false
         		  },
         		    768: {
         			items: 3,
         			nav: false
         		  },
         		  
         		  
         		  
         		  1000: {
         			items: 4,
         			nav: true,
         			loop: false,
         			margin:0
         		  }
         		}
         	  })
           $('.play').on('click', function() {
         	owl.trigger('play.owl.autoplay', [1000])
           })
           $('.stop').on('click', function() {
         	owl.trigger('stop.owl.autoplay')
           })
         })
      </script> 
      <script>
         $(document).ready(function(){
           $(".languageCustom").click(function(){
               
             $(".dropdown-menu ").toggleClass("open");
           });
         });
      </script>
      <script>
         $(function () {
         
           $(document).on('mousemove','body', function(event){
                 var bodyX=$(this).width();
                 var bodyY=$(this).height();
                 var centerX=bodyX/2;
                 var centerY=bodyY/2;
                 var mouseX=event.screenX;
                 var mouseY=event.screenY;
                 var fromCenterX=(mouseX-centerX)*10/bodyX;
                 var fromCenterY=(mouseY-centerY)*10/bodyY;
                 var fromCenterX1=(mouseX-centerX)*5/bodyX;
                 var fromCenterY1=(mouseY-centerY)*5/bodyY;
                 $('#paralax1').css({'transform':' translate3d('+fromCenterX+'px, '+fromCenterY+'px, 0px)'});
                 $('#paralax2').css({'transform':' translate3d('+fromCenterY+'px, '+fromCenterX+'px, 0px)'});
         
                  $('#paralax3').css({'transform':' translate3d('+fromCenterX+'px, '+fromCenterY+'px, 0px)'});
                  $('#paralax-img-1-right').css({'transform':' translate3d('+fromCenterX+'px, '+fromCenterY+'px, 0px)'});
                  $('#paralax-img-2-left').css({'transform':' translate3d('+fromCenterX*2+'px, '+fromCenterY+'px, 0px)'});
                  $('#paralax-img-2-right').css({'transform':' translate3d('+fromCenterX*2+'px, '+fromCenterY+'px, 0px)'});
           });
         
         
         
           $(document).on('click', 'a.scrollto[href*="#"]:not([href="#"])', function(event) {
               var target = $(this.hash);
               target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
               if (target.length) {
                 $('html, body').animate({
                   scrollTop: (target.offset().top-160)
                 }, 1000);
                 return false;
               }
             event.preventDefault();
           });
         
         });
         
         
         new WOW().init();
      </script>
      <script>
         var vid = document.getElementById("myVideo");
         
         function enableMute() { 
           vid.muted = true;
         } 
         
         function disableMute() { 
           vid.muted = false;
         } 
         
         function checkMute() { 
           alert(vid.muted);
         } 
      </script> 
  
      <script>
         $(document).ready(function(){
           $(".plan-btn i").click(function(){
             $(".box-calc").css("display", "block");
           });
         });
      </script>

      <script>
         $(document).ready(function(){
         var selector = '.plan-btn a';
         $(selector).on('click', function(){
         	$("body").addClass("popover1");
             $(selector).removeClass('active');
            $(this).addClass('active');
         });
         });
      </script>
      <script>
         $(document).ready(function(){
           $(".box-calc > div i.fas.fa-times").click(function(){
             $(".box-calc").css("display", "none");
         	$("body").removeClass("popover1");
         	$("body").removeClass("checkGrad");
           });
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function () {
          $('#sidebarCollapse').on('click', function () {
             
         	 $('#sidebar').toggleClass('active');
          });
         });
         
                  $(function(){
                      var getLang = localStorage.getItem('htmltest');
                      if(getLang){
                          $('#countryCode').html(getLang);
                      }
                      
                      $(".dropdown-menu li a").click(function(){
                          var val = $(this).html(); 
                          localStorage.setItem('htmltest', val);
                          $('#countryCode').html(val);
                     });
                  });
      </script>
<script>
   $.ajaxSetup({
   headers: {
   	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });
</script>
<style>
.aboutHyipe h2 {
    font-size: 18px;
    color: #3f139e;
    padding-bottom: 12px;
}

.aboutHyipe p {
    color: #000;
    line-height: 24px;
    font-size: 15px !important;
}

.howIt {
    padding-bottom: 50px;
}

 

 </style>
 

</style>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6040a730385de407571c660e/1evu8q5o2';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->