     <div class="footerouter">
          <div class="footer">
        <div class="col-lg-12 col-sm-12 col-md-12">
             <p>© Copyright <?php echo e(date('Y',strtotime(getCompanyinfo('company_start')))); ?> <span><?php echo e(getCompanyinfo('company_legal_name')); ?></span>. All rights reserved.</p>
      </div>   </div>    </div> 
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
		//	<!--showLeftPush.onclick = function() {
		//	classie.toggle( this, 'active' );
			//	classie.toggle( body, 'cbp-spmenu-push-toright' );
			//	classie.toggle( menuLeft, 'cbp-spmenu-open' );
			//	disableOther( 'showLeftPush' );
		//	};-->
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	

		
	
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   
<?php
$current_url = url()->current();
if($current_url!=guard_url('/')){
?>   
<script>
$(document).ready(function(){
  $(".profile_details_drop").click(function(){
    $(".dropdown-menu.dropdown-menu1").toggle();
  });
});
</script>
<?php } ?>   
   
   
<script>
$(document).ready(function(){
  $(".btn-warning.dropdown-toggle").click(function(){
    $(".btn-group > .dropdown-menu").toggle();
  });
});
</script> 
   
   