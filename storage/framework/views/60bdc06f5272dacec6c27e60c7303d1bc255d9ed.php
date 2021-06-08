<?php if(Session::has('message')): ?>
<?php if(Session::get('code') < 200): ?>
<div class="alert alert-info">
   <button type="button" aria-hidden="true" class="close">
   <i class="material-icons">close</i>
   </button>
   <span>
   <b> Info - </b> <?php echo e(Session::get('message')); ?></span>
</div>
<?php elseif(Session::get('code') < 300): ?>        
<div  class="alert alert-success alert-dismissable">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <?php echo e(Session::get('message')); ?>

</div>
<?php elseif(Session::get('code') < 400): ?>
<div class="alert alert-warning">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <span>
   <b> Warning - </b> <?php echo e(Session::get('message')); ?></span>
</div>
<?php else: ?>
<div class="alert alert-danger">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <span>
   <b> Error - </b> <?php echo e(Session::get('message')); ?></span>
</div>
<?php endif; ?>
<?php endif; ?>
<?php if(Session::has('errors')): ?>
<div class="alert alert-danger">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <ul>
      <?php $__currentLoopData = Session::get('errors')->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($message); ?> </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </ul>
</div>
<?php endif; ?>