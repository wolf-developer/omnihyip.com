<div class="frequent">
<div class="container">
  <div class="row"> 
 
			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
			     <h2 class="title">
                  <small>Frequently Asked Questions</small>
                  <div><span>FAQ</span></div>
               </h2>
				<div class="faq_content">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									 
						<?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo e($faq->id); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($faq->id); ?>" class="collapsed">
										<i class="more-less glyphicon glyphicon-plus"></i>
										<?php echo e($faq->question); ?>

									</a>
								</h4>
							</div>
							<div id="collapse<?php echo e($faq->id); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo e($faq->id); ?>" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									  <?php echo $faq->answer; ?>

								</div>
							</div>
						</div>				
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>  	
			</div>
		
		</div>
	</div>
</div></div>

<style>
.faq_content .panel-default > .panel-heading {
    color: #fff;
    background-color: #3e1188 !important;
    border-color: #3e1188!important;
}
</style>
<script>
function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>
