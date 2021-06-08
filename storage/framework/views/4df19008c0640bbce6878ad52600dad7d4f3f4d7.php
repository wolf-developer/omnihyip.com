<div id="page-wrapper" style="min-height: 256px;">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
        <div class="row">
            
            
            <div id="show-profile">
                <div class="col-md-12">
                    <section class="content-header">
        <h3 class="title1">
        <i class="fa fa-user "></i> Change Password
        </h3>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Change Password</li>
        </ol>
    </section>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li><a href="<?php echo e(guard_url('profile')); ?>" aria-expanded="false">Profile</a></li>
                            <li class="active"><a href="<?php echo e(guard_url('password')); ?>" aria-expanded="false">Change Password</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                 <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<?php echo Form::vertical_open()
->id('form-change-password')
->action('admin/password')
->method('POST')
->class('change-password'); ?>


<?php echo Form::password('old_password')
-> label(trans('user::user.label.current_password'))
-> placeholder(trans('user::user.placeholder.current_password')); ?>


<?php echo Form::password('password')
-> label(trans('user::user.label.new_password'))
-> placeholder(trans('user::user.placeholder.new_password')); ?>



<?php echo Form::password('password_confirmation')
-> label(trans('user::user.label.new_password_confirmation'))
-> placeholder(trans('user::user.placeholder.new_password_confirmation')); ?>

<button type="submit" class="btn btn-warning" id="btn-update-profile"><?php echo e(__('Save')); ?></button>
<button type="reset" class="btn btn-default btn-close"><?php echo e(__('Reset')); ?></button>

<?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<style type="text/css">
    .mh500{
        min-height: 500px;
    }
</style>

 <script>
$(function() {
   $("form#form-change-password").validate({
   rules: {
	  old_password: {
        required: true,
        
      },
      password: {
        required: true,
        minlength: 6,
       },
      password_confirmation: {
        required: true,
        equalTo:'#password'
      
    }
  },
     messages: {
       
        old_password: {
        required: "Please enter old password"
       
        },
        password: {
        required: "Please enter new password",
        minlength: "Your password must be at least 6 characters long",
       },
        password_confirmation : {
        required: "Please enter confirm password",
        equalTo: "Please enter the same password as above"
    }
    
     
    },
    submitHandler: function(form) {
        
      form.submit();
    }
  });
});
</script>



