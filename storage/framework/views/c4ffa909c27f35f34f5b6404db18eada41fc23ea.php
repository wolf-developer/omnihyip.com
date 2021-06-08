<?php $__env->startSection('icon'); ?> 
<i class="pe-7s-display2"></i>
<?php $__env->stopSection(); ?>
 <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php $__env->startSection('investplan'); ?>
<?php echo $__env->make('plan::public.plan.partial.investplan', ['mode' => 'investplan'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?> 
<?php echo __('plan::plan.title.plandeposit'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?> 
  <li><a href="<?php echo guard_url('/'); ?>"><?php echo e(__('app.home')); ?></a></li>
  <li><?php echo __('plan::plan.name'); ?></li>  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('list'); ?>
    <?php echo $__env->make('plan::public.plan.partial.list', ['mode' => 'list'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('resource.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>