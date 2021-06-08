@include('page::public.partials.inner_banner_or_slider')
     
	
<?php if($page->name == '') { ?>

 {!!$page->content!!}
 <?php }else{ ?>


	 <!--<h2> {!!$page->title!!}</h2>-->
 {!!$page->content!!}

<?php } ?> 





