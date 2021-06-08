<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?php echo e(Theme::getTitle()); ?></title>
      <meta name="description" content="<?php echo getCompanyinfo('meta_data'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="apple-touch-icon" href="<?php echo e(asset('apple-touch-icon.png')); ?>">
      <meta name="google-site-verification" content="<?php echo e(getCompanyinfo('google_webmaster_tool_code')); ?>" />
      <?php if(getCompanyInfo('google_analytic_code')!=''){?>
      <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo getCompanyInfo('google_analytic_code');?>"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', '<?php echo getCompanyInfo('google_analytic_code');?>');
      </script>
      <?php } ?>	
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"  crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
      <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
      <?php echo Theme::asset()->styles(); ?>

      <?php echo Theme::asset()->scripts(); ?>

   </head>
   <div class="wrapper">
      <div class="bser">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1500 -1500 3000 3000" preserveAspectRatio="xMidYMid slice">
            <defs>
               <pattern id="grid1" width="100" height="173.2" patternUnits="userSpaceOnUse">
                  <path fill-rule="evenodd" d=" M0,0 H100 V173.2 H0 M25,129.9 m20,0 a20,20 0 1,0  0,0.1 M125,129.9 m20,0 a20,20 0 1,0  0,0.1 M75,43.3 m20,0 a20,20 0 1,0  0,0.1 M-25,43.3 m20,0 a20,20 0 1,0  0,0.1"/>
               </pattern>
               <pattern id="grid2" width="100" height="173.2" patternUnits="userSpaceOnUse">
                  <path fill-rule="evenodd" d=" M0,0 H100 V173.2 H0 M25,129.9 m20,0 a20,20 0 1,0  0,0.1 M125,129.9 m20,0 a20,20 0 1,0  0,0.1 M75,43.3 m20,0 a20,20 0 1,0  0,0.1 M-25,43.3 m20,0 a20,20 0 1,0  0,0.1"/>
               </pattern>
            </defs>
            <rect fill="url(#grid1)" x="-3000" y="-3000" width="6000" height="6000" transform="scale(0.9,0.9) translate(0,0) rotate(0)"/>
            <rect fill="url(#grid2)" x="-3000" y="-3000" width="6000" height="6000" transform="scale(0.9,0.9) translate(0,0) rotate(0)"/>
         </svg>
      </div>
      <!-- Sidebar  -->
      <nav id="sidebar" class="amenu">
         <div class="sidebar-header">
            <h3>  <a href="<?php echo e(guard_url('/')); ?>"><img src="<?php echo getCompanyLogo(); ?>" alt="<?php echo e(__('app.name')); ?>" style="max-height:60px;"></a></h3>
            <strong>
               <div class="logo2">
                  <a href="<?php echo e(trans_url('/')); ?>">
                  <img src="<?php echo e(url('public/themes/echyip/assets/images/smallogo.png')); ?>" alt="<?php echo e(__('app.name')); ?>">
                  </a>
               </div>
            </strong>
         </div>
         <?php echo Theme::partial('aside'); ?>

      </nav>
      <div id="content">
         <!-- start profile header-->
         <div class="dashboard_header_top">
            <div class="profile_box">
               <button type="button" id="sidebarCollapse" class="dashboardbar">
               <i class="fas fa-bars"></i>
               </button>
               <?php echo Theme::partial('header'); ?>

            </div>
         </div>
         <!-- end profile header-->
         <div class="dashboard_content">
            <?php echo Theme::content(); ?>

         </div>
      </div>
   </div>
   <?php echo Theme::partial('footer'); ?>

   <?php echo Theme::asset()->container('footer')->scripts(); ?>

   <?php if(Request::path() != 'client/password'): ?>
         <script>
         $(document).ready(function() {
               
               $('body').on('keyup','input',function(){
                  const str = $(this).val();
                  $(this).val(str.replace(/[^a-zA-Z0-9@./_:'" ]/g, ""));
               });
               setTimeout(function(){ $('.alert').hide(); }, 5000);
              
           });
           </script>
           <?php endif; ?>
   <script>
      window.requestAnimFrame = (function(callback) {
      return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
         function(callback) {
             window.setTimeout(callback, 1000 / 60);
         };
      })();
      
      
      var rect = document.querySelectorAll('rect'),
        path = document.querySelectorAll('path'),
        seg = [].map.call(path,function(p){ 
           return p.pathSegList
      }),
        size = [].map.call(rect,function(r){ 
           return r.transform.baseVal.getItem(0) 
      }),
        off = [].map.call(rect,function(r){ 
           return r.transform.baseVal.getItem(1) 
      }),
        rots = [].map.call(rect,function(r){ 
           return r.transform.baseVal.getItem(2) 
      });
      
      function radius(lays,rad){
      		rad = Math.max(Math.min(rad,43),0);
      		for (var i=5;i<15;i+=3){
         				var seg2 = seg[lays].getItem(i+1);
         				seg[lays].getItem(i).x = seg2.r1 = seg2.r2 = rad;
      		}
      		return rad;
      }
      //rotate
      function rot(layer,degrees){ 
       rots[layer].setRotate(degrees,0,0) 
      }
      //translate
      function trans(layer,x,y){ 
       off[layer].setTranslate(x,y) 
      }
      //scale
      function scale(layer,scale){ 
       size[layer].setScale(scale,scale) 
      }
      //calls
      radius(0,35);
      radius(1,25);
      rot(1,35);
      scale(0,.88)
      //animate
      function anim(){
        var t = Date.now();
      			trans(0,Math.sin(t/7000)*150,Math.sin(t/3000)*120);
      rot(1,Math.sin(t/19000)*30);
        window.requestAnimationFrame(anim);
      }
      anim();
       
   </script>
   </body>
</html>

