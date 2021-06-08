<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo e(Theme::getTitle()); ?> - <?php echo getCompanyinfo('company_name'); ?></title>
        <meta name="description" content="<?php echo getCompanyinfo('meta_data'); ?>">
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php echo e(asset('apple-touch-icon.png')); ?>">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(url('/public/themes/echyip/assets/css/owl.carousel.min.css')); ?>">
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(url('/public/themes/echyip/assets/css/owl.theme.default.min.css')); ?>">
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(url('/public/themes/echyip/assets/css/jquery.fancybox.min.css')); ?>">
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(url('/public/themes/echyip/assets/css/style.css')); ?>">
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(url('/public/themes/echyip/assets/css/fontello.css')); ?>">
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(url('/public/themes/echyip/assets/css/animate.css')); ?>">
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(url('/public/themes/echyip/assets/css/newcustom.css')); ?>">
          <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(url('/public/themes/echyip/assets/css/bootstrap.min.css')); ?>">
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(url('/public/themes/echyip/assets/css/responsive.css')); ?>">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
         <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"  crossorigin="anonymous">
        <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
        <script src="<?php echo e(asset('public/themes/echyip/assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/themes/echyip/assets/js/jquery.validate.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/assets/vendor/jquery/tag_not_allowed.js')); ?>"></script>
        <script src="<?php echo e(asset('public/themes/echyip/assets/js/script.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/themes/echyip/assets/js/wow.js')); ?>"></script> 
        <script src="<?php echo e(asset('public/themes/echyip/assets/js/waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/themes/echyip/assets/js/jquery.countup.js')); ?>"></script>
        <script src="<?php echo e(asset('public/themes/echyip/assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/themes/echyip/assets/js/owl.carousel.js')); ?>"></script> 
        <script src="<?php echo e(asset('public/themes/echyip/assets/js/jquery.fancybox.min.css')); ?>"></script> 
        <script src="<?php echo e(asset('public/themes/echyip/assets/js/jquery.fancybox.min.js')); ?>"></script>
    </head>
    <body class="login-page">
      <div class="home-banner">
<?php echo Theme::partial('headerlogin'); ?>

</div>
<?php echo Theme::content(); ?>

        <?php echo Theme::asset()->container('footer')->scripts(); ?>

        <?php echo Theme::partial('footerlogin'); ?>

    </body>
</html>
<style type="text/css">
html {
    display: table;
    height: 100%;
    width: 100%;
}
</style>
