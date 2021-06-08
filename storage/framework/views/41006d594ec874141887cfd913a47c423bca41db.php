    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#client" data-toggle="tab"><?php echo trans('user::client.tab.name', ['client' => $type]); ?></a></li>
            <div class="box-tools pull-right">
                <button id="clientEdit" type="button" class="btn btn-warning btn-sm" data-action='UPDATE' data-form='#user-client-edit'  data-load-to='#user-client-entry' data-datatable='#user-client-list'><i class="fa fa-floppy-o"></i> <?php echo e(trans('app.save')); ?></button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#user-client-entry' data-href='<?php echo e(guard_url('user/client')); ?>/<?php echo e($client->getRouteKey()); ?>'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.cancel')); ?></button>

            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('user-client-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('user/' . $type . '/' . $client->getRouteKey())); ?>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="client">
                <div class="tab-pan-title">  <?php echo e(trans('app.edit')); ?>  <?php echo trans('user::client.name'); ?> [<?php echo $client->name; ?>] </div>
                <?php echo $__env->make('user::default.partial.entry', ['mode' => 'edit'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <?php echo Form::close(); ?>

    </div>


