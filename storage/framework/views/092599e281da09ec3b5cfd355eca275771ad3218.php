<?php echo $__env->make('page::public.partials.inner_banner_or_slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     
	
<?php if($page->name == '') { ?>

 <?php echo $page->content; ?>

 <?php }else{ ?>


	 <!--<h2> <?php echo $page->title; ?></h2>-->
 <?php echo $page->content; ?>


<?php } ?> 





