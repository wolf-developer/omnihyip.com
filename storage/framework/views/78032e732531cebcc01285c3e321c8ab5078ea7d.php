<!DOCTYPE html>
<html>
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
      <title><?php echo Theme::getTitle(); ?> :: <?php echo e(getCompanyInfo('company_name')); ?></title>
      <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300'" rel='stylesheet' type='text/css'>
      <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/themes/echyip/assets/css/bootstrap.min.css')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/themes/admin/assets/css/font-awesome.css')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/themes/admin/assets/css/animate.css')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/themes/admin/assets/css/custom.css')); ?>">
      <?php echo Theme::asset()->styles(); ?>

      <!--<script src="<?php echo e(asset('public/assets/vendor/jquery/jquery.min.js')); ?>" type="text/javascript"></script>-->
      <?php echo Theme::asset()->scripts(); ?> 
      <script src="<?php echo e(asset('public/themes/admin/assets/js/bootstrap.js')); ?>"> </script>
      <script src="<?php echo e(asset('public/themes/admin/assets/js/metisMenu.min.js')); ?>"></script>
      <script src="<?php echo e(asset('public/themes/admin/assets/js/custom.js')); ?>"></script>
      <script src="<?php echo e(asset('public/themes/admin/assets/js/underscore-min.js')); ?>" type="text/javascript"></script>
      <script src= "<?php echo e(asset('public/themes/admin/assets/js/moment-2.2.1.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('public/themes/admin/assets/js/clndr.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('public/themes/admin/assets/js/modernizr.custom.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('public/themes/admin/assets/js/wow.min.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('public/themes/admin/assets/js/Chart.js')); ?>" type="text/javascript"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   </head>
   <body class="cbp-spmenu-push skin-<?php echo e(setting('admin.color', 'red')); ?>" >
      <div class="servicetopouter">
      <div class="main-content">
      <div class="wrapper">
         <div class="prodbg2">
            <canvas id="canvas2"></canvas>
         </div>
         <!-- Sidebar  -->
         <nav id="sidebar" class="heascivt">
            <div class="sideinn">
               <div class="sidebar-header">
                  <h3>
                     <div class="logo">
                        <a href="<?php echo e(guard_url('/')); ?>">
                        <img src="<?php echo getCompanyLogo(); ?>" alt="<?php echo e(__('app.name')); ?>">
                        </a>
                     </div>
                  </h3>
                  <strong>
                     <div class="logo2">
                        <a href="<?php echo e(trans_url('/')); ?>">
                        <img src="<?php echo e(asset('favicon.ico')); ?>" alt="<?php echo e(__('app.name')); ?>">
                        </a>
                     </div>
                  </strong>
               </div>
               <?php echo Theme::partial('aside'); ?>

            </div>
         </nav>
         <div id="content_cont">
            <!-- start profile header-->
            <div class="dashboard_header_top">
               <div class="profile_box">
                  <button type="button" id="sidebarCollapse" class="dashboardbar">
                  <i class="fas fa-bars"></i>
                  </button>
                  <div class="dashboard_right">
                     <?php echo Theme::partial('header'); ?>

                  </div>
               </div>
               <!-- end profile header-->
               <div class="dashboard_content">
                  <?php echo Theme::content(); ?>

                  <?php echo Theme::partial('right'); ?>

               </div>
            </div>
         </div>
         <?php echo Theme::partial('footer'); ?>

         <?php if(Request::path() != 'admin/password'): ?>
         
           <?php endif; ?>
      </div>
   </body>
   <?php echo Theme::asset()->container('footer')->scripts(); ?>

</html>