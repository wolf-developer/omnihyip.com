<div id="page-wrapper" style="min-height: 256px;">
    <!-- Content Header (Page header) -->
    
        
    
    <!-- Main content -->
    <section class="content">
       
        <div class="row">
            <div id="show-profile">
                <div class="col-md-12">
                    <section class="content-header">
                     <h3 class="title1">
        <i class="fa fa-user "></i> Profile
        </h3>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile</li>
        </ol>
    </section>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="<?php echo e(guard_url('profile')); ?>" data-toggle="tab" aria-expanded="false">Profile</a></li>
                            <li><a href="<?php echo e(guard_url('password')); ?>" aria-expanded="false">Change Password</a></li>
                           
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                 <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                                    <?php echo Form::vertical_open()
                                    ->id('form-update-profile')
                                    ->method('POST')
                                    ->action('admin/profile')
                                    ->class('update-profile'); ?>


                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <?php echo Form::text('name')
                                        -> label(trans('user::user.label.name'))
                                        -> placeholder(trans('user::user.placeholder.name')); ?>

                                        <?php echo Form::text('email')
                                        -> label(trans('user::user.label.email'))
                                        ->disabled('yes')
                                        -> placeholder(trans('user::user.placeholder.email')); ?>


                                        

                                        <?php echo Form::hidden('designation'); ?>


                                        <?php echo Form::tel('mobile')
                                        -> label(trans('user::user.label.mobile'))
                                        ->pattern("^\d{10}$|^\d{12}$|^\d{11}$")
                                        ->title("Please enter valid mobile No:xxxxxxxxxx")
                                        -> placeholder(trans('user::user.placeholder.mobile')); ?>  
                                              
                                           
                                        <?php echo Form::textarea('address')
                                        -> label(trans('user::user.label.address'))
                                        -> placeholder(trans('user::user.placeholder.address')); ?>

                                        
                                        
                               
											<div class="form-group label-floating">
											<div class="formbc">
											<ul>
											    
											<li>	<input class="changestatus" type='radio' <?php echo e(($user->twofa==1)?'checked="checked"':''); ?> value="1" name="twofa">
												<label class="control-label" for="address">Two FA Enable	</label>
											</li>
											<li>
								
								<input class="changestatus" type='radio' <?php echo e(($user->twofa==0)?'checked="checked"':''); ?> value="0" name="twofa">
									<label class="control-label col-lg-offset-1" for="address">	Two FA Disable	</label>
									</li>
									</ul>
										</div> 	</div>
										

                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">    
                                                <?php echo $user->files('photo')->url($user->getUploadUrl('photo'))->cropper($user->picture); ?>

                                        </div>

                                    </div>                               
                                     
                                    <button type="submit" class="btn btn-warning" id="btn-update-profile">Save changes</button>
                                    <button type="reset" class="btn btn-default btn-close">Reset</button>

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

