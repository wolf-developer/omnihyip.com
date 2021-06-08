<div class="page-wrapper">
    <header class="header clearfix"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <h2 class="main-title pull-left"><?php $__env->startSection('title'); ?><?php echo $__env->yieldSection(); ?></h2>
        <ol class="breadcrumb pull-right">
            <?php $__env->startSection('breadcrumb'); ?><?php echo $__env->yieldSection(); ?>
        </ol>
    </header>
    
    <?php $__env->startSection('investplan'); ?><?php echo $__env->yieldSection(); ?>

    <div class="card">
        <div class="card-block">
            <div role="tabpanel">
                <div class="card-title clearfix">
                    <ul class="nav nav-tabs tabs-bordered" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#main" aria-controls="main" role="tab" data-toggle="tab" class="pt-0"><?php $__env->startSection('title'); ?><?php echo $__env->yieldSection(); ?></a>
                        </li>
   
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="main">
                                                      
                        <?php $__env->startSection('list'); ?> 
                        <?php echo $__env->yieldSection(); ?>
                        <?php $__env->startSection('pagination'); ?> 
                        <?php echo $__env->yieldSection(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
<?php $__env->startSection('script'); ?>

<?php echo $__env->yieldSection(); ?>

<?php $__env->startSection('style'); ?>

<?php echo $__env->yieldSection(); ?> 