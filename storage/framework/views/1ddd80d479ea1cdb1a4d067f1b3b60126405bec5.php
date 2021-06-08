
   <!--//logo-->

 <div class="header-right">
   <div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle dropdown-toggle1" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="<?php echo user()->picture; ?>" alt="" class="img-responsive"> </span> 
									<div class="user-name">
										<p><?php echo user()->name; ?></p>
										<span><?php echo user()->designation; ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu dropdown-menu1 drp-mnu">
								<li> <a href="<?php echo e(guard_url('profile')); ?>"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="<?php echo e(guard_url('logout')); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
   
         
	   <script type="text/javascript">
         $(document).ready(function () {
             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').toggleClass('active');
             });
         });
      </script>
   <!--<script src="https://hyip.intermining.io/public/themes/admin/assets/js/scrollmin.js"></script>-->
