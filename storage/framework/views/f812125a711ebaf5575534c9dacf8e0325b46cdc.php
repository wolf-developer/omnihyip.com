        <aside class="sidebar">
            <div class="user-profile">
                   <!--<div class="user-profileouter">
                   <a href="">
                    <img src="<?php echo e(user()->picture); ?>" alt="">
                </a>
                <h3><?php echo e(user()->name); ?><span><?php echo e(user()->email); ?></span></h3>
                <div class="btnn">
                    <a href="<?php echo e(guard_url('profile')); ?>"> <i class="icon-settings icons"></i> <?php echo e(__('app.settings')); ?></a>
                    <a href="<?php echo e(guard_url('password')); ?>" class="btnn1"> <i class="icon-key icons"></i> <?php echo e(__('app.password')); ?></a>
                </div>
                </div>-->
                
                
                <li class="header">MAIN NAVIGATION</li>
				<?php echo Menu::menu('client', 'menu::menu.client'); ?>

<!--                <a href="#" class="btn theme-btn btn-block">My Advts</a>
                <a href="#" class="btn theme-btn btn-block">Add New Advts</a>-->
            </div>
        </aside>
