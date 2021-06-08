<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title><?php echo Theme::getTitle(); ?> :: <?php echo e(getCompanyInfo('company_name')); ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
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
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/themes/admin/assets/css/bootstrap.css')); ?>">
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(asset('public/themes/echyip/assets/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/themes/admin/assets/css/style.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/themes/admin/assets/css/font-awesome.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/themes/admin/assets/css/animate.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/themes/admin/assets/css/custom.css')); ?>">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <script src="<?php echo e(asset('public/themes/admin/assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/assets/vendor/jquery/jquery.validate.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/themes/admin/assets/js/bootstrap.js')); ?> "> </script>
       </head>
        <body class="">
    	<div class="mcontent">
        <?php echo Theme::content(); ?>

        <?php echo Theme::asset()->container('footer')->scripts(); ?>

        </div>
        </body>
       </html>
