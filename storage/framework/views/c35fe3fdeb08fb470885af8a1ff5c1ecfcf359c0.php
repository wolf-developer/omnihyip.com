    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  <?php echo trans('user::client.name', ['client' => $type]); ?></a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-action='NEW' data-load-to='#user-client-entry' data-href='<?php echo e(guard_url('user/' . $type . '/create')); ?>'><i class="fa fa-plus-circle"></i> <?php echo e(trans('app.new')); ?></button>
                <?php if($client->id ): ?>
                <button type="button" class="btn btn-warning btn-sm" data-action="EDIT" data-load-to='#user-client-entry' data-href='<?php echo e(guard_url('user/' . $type)); ?>/<?php echo e($client->getRouteKey()); ?>/edit'><i class="fa fa-pencil-square"></i> <?php echo e(trans('app.edit')); ?></button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#user-client-entry' data-datatable='#user-client-list' data-href='<?php echo e(guard_url('user/' . $type)); ?>/<?php echo e($client->getRouteKey()); ?>' >
                <i class="fa fa-times-circle"></i> <?php echo e(trans('app.delete')); ?>

                </button>
                <?php endif; ?>
            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('user-client-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('user/' . $type)); ?>

            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> <?php echo e(trans('app.view')); ?>   <?php echo trans('user::client.name', ['client' => $type]); ?>  [<?php echo $client->name; ?>] </div>
                <div class="tab-pane active" id="details">
                    <?php echo $__env->first(['user::' . $type . '.partial.entry', 'user::default.partial.entry'], ['mode' => 'show'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        <?php echo Form::close(); ?>

    </div>
