<	<div class="mainpage">
    <!--<div class="login-logo">
        <a href="<?php echo guard_url('/'); ?>"><img src="<?php echo getCompanyLogo(); ?>" class="img-responsive center-block" alt="<?php echo e(__('app.name')); ?>" title="<?php echo e(__('app.name')); ?>" style="max-height:60px;"></a>
    </div>-->
    <!-- /.login-logo -->
    <div class="widget-shadow">
        <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo Form::vertical_open()
        ->method('POST')
        ->action(guard_url('password/email')); ?>

        <?php echo csrf_field(); ?>

        <?php if(Session::has('status')): ?>
        <div class="alert alert-info">
            <strong>Info!</strong> <?php echo Session::pull('status');; ?>

        </div>
        <?php else: ?>
        <p>If you have forgotten your password - reset it.</p>
        <?php endif; ?>
        <div class="form-group has-feedback mt20">
            <?php echo Form::text('email', ''); ?>

            <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Send password</button>
        <?php echo Form::Close(); ?>

        
    </div>
    <div class="row mt30">
        <div class="col-md-12 text-center">
           <a class="text-white" href="<?php echo e(guard_url("login")); ?>">Back to Login</a> 
        </div>
    </div>
    
    <!-- /.login-box-body -->
</div>
