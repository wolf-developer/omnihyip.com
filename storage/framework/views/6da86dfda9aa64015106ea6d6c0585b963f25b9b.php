<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?php echo e(Theme::getTitle()); ?> - <?php echo e(getCompanyinfo('company_name')); ?></title>
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
      <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
      <?php echo Theme::asset()->styles(); ?>

      <?php echo Theme::asset()->scripts(); ?>

   </head>
   <body>
      <div class="home-banner">       
         <?php echo Theme::partial('header'); ?>

      </div>
      <?php echo Theme::content(); ?>

      <?php echo Theme::asset()->container('footer')->scripts(); ?>

      <?php echo Theme::partial('footer'); ?>

   </body>
</html>