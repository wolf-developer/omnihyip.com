<ul class="nav leftmenu">
    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($menu->status == 1) { ?>
        <?php if(count($children = $menu->getChildren())): ?>
        <li class="<?php echo e(isset($menu->active) ? $menu->active : ''); ?>"  role="button" class="dropdown-toggle" data-toggle="dropdown">
            <a href="<?php echo e(trans_url($menu->url)); ?>"  target="<?php echo e(isset($menu->target) ? $menu->target : ''); ?>">
                <i class="<?php echo isset($menu->icon) ? $menu->icon : ''; ?>"></i> <span><?php echo e($menu->name); ?></span>
                <b class="caret"></b>
            </a>
            <?php echo $__env->make('menu::menu.sub.default', array('menus' => $children), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </li>
        <?php else: ?>
        <li  class="<?php echo e(isset($menu->active) ? $menu->active : ''); ?>">
            <a href="<?php echo e(trans_url($menu->url)); ?>" target="<?php echo e(isset($menu->target) ? $menu->target : ''); ?>">
                <i class="<?php echo isset($menu->icon) ? $menu->icon : ''; ?>"></i>
                <p><?php echo e($menu->name); ?></p>
            </a>
        </li>
        <?php endif; ?>
        <?php } ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
