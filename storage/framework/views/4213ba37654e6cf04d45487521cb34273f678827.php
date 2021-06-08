<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo e(Theme::getTitle()); ?> - <?php echo e(getCompanyinfo('company_name')); ?></title>
        <meta name="keyword" content="<?php echo e(Theme::getMetaKeyword()); ?>">
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
        <meta name="description" content="<?php echo e(Theme::getMetaDescription()); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php echo e(asset('apple-touch-icon.png')); ?>">
<link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
        <?php echo Theme::asset()->styles(); ?>

        <?php echo Theme::asset()->scripts(); ?>

    </head>
    <body>
        <div class="page">
        
        <?php echo Theme::partial('header'); ?>        
        <?php echo Theme::content(); ?>

        <?php echo Theme::partial('footer'); ?>

        </div>
        <?php echo Theme::asset()->container('footer')->scripts(); ?>

        <?php echo Theme::asset()->container('extra')->scripts(); ?>

    </body>
</html>
