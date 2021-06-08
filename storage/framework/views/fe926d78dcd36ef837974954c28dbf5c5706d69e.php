<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($menu->status == 1) { ?>
        <li><a href="<?php echo e(trans_url($menu->url)); ?>" ><?php echo e($menu->name); ?></a></li>
    <?php if($menu->hasChildren()): ?>
        <?php echo $__env->make('menu::menu.sub.footer', array('menus' => $menu->getChildren()), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <?php } ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
