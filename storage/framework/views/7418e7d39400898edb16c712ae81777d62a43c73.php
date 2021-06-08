<section class="header header-page inner_header" id="header">
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