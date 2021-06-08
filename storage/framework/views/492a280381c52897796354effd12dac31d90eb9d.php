    <script type="text/javascript">
         $(document).ready(function () {
             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').toggleClass('active');
             });
         });
      </script>
      <?php if(user()->status!= 'Suspended'): ?>
      <div class="dashboard_right">
                  <div class="btn-group">
                     <button class="profile_btnn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo e(user()->picture); ?>" alt="">  Profile
                     </button>
                     <div class="dropdown-menu profile_menu">
                         <div class="profileinn"> 
                         
                     
                            <div class="wAVE">
                           <div class="wave -one"></div>
                        <div class="wave -two"></div>
                        <div class="wave -three"></div>
                         </div>
                        
                        
                               <div class="profile_box">
                           <figure> <img src="<?php echo e(user()->picture); ?>" alt=""></figure>
                           <h3><?php echo e(user()->name); ?><span></h3>
                           <h4><?php echo e(user()->email); ?></h4>
                           <div class="profile_btn">
                            <div class="btnn">
                    <a href="<?php echo e(guard_url('profile')); ?>" class="btnTheme loginbtn btn"> <i class="icon-settings icons"></i> <?php echo e(__('app.settings')); ?></a>
                    <a href="<?php echo e(guard_url('password')); ?>" class="btnTheme loginbtn btn"> <i class="icon-key icons"></i> <?php echo e(__('app.password')); ?></a>
                </div>
                           </div>
                        </div>
                      
                        </div>
                     </div>
                  </div>
              
               <?php endif; ?> 
              <div class="logutbtn"><a href="<?php echo e(guard_url('logout')); ?>" id="logout" class="btn btnTheme"><i class="icon-logout icons"></i> <?php echo e(__('auth.logout')); ?></a></div>
              
              
               </div>
             

    
     
     
     
     
     
     
              <!--  <div class="loginn">
                    <ul>
                        <li><a href="<?php echo e(guard_url('profile')); ?>"><i class="icon-user icons"></i> <?php echo e(__('auth.myaccount')); ?></a></li>
                        <li><a href="<?php echo e(guard_url('logout')); ?>" class="btn btnn1"><i class="icon-logout icons"></i> <?php echo e(__('auth.logout')); ?></a></li>
                    </ul>
            </div>-->