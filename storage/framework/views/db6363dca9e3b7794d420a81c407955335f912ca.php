<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong><?php echo e(trans('app.flashsuccess')); ?></strong> <?php echo e($message); ?>

</div>
<?php echo e(Session::forget('success')); ?>

<?php endif; ?>

<?php if($message = Session::get('error')): ?>
<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong><?php echo e(trans('app.flasherror')); ?>:</strong> <?php echo e($message); ?>

</div>
<?php echo e(Session::forget('error')); ?>

<?php endif; ?>

<?php if($message = Session::get('warning')): ?>
<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong><?php echo e(trans('app.flashwarning')); ?>:</strong> <?php echo e($message); ?>

</div>
<?php echo e(Session::forget('warning')); ?>

<?php endif; ?>

<?php if($message = Session::get('info')): ?>
<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong><?php echo e(trans('app.flashinfo')); ?>:</strong> <?php echo e($message); ?>

</div>
<?php echo e(Session::forget('info')); ?>

<?php endif; ?>

<?php if(Session::has('message')): ?>
    <?php if(session('code') < 200): ?>
        <div class="alert alert-info">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Info - </b> <?php echo e(session('message')); ?></span>
        </div>
    <?php elseif(session('code') < 300): ?>
        <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Success - </b> <?php echo e(session('message')); ?></span>
        </div>
    <?php elseif(session('code') < 400): ?>
        <div class="alert alert-warning">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Warning - </b> <?php echo e(session('message')); ?></span>
        </div>
    <?php else: ?>
        <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Error - </b> <?php echo e(session('message')); ?></span>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php if(Session::has('errors')): ?>
        <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <ul>
              <?php $__currentLoopData = session('errors')->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($message); ?> </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
<?php endif; ?>

