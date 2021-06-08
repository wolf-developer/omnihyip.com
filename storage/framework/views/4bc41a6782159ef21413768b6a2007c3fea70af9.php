<?php $homeData=$page;?>
<?php if(count($homeData->images)>0): ?>
<?php if(count($homeData->images)==1): ?>
<!--if single banner -->
<img src="<?php echo asset('storage/uploads'.$homeData->images[0]['path']); ?>" alt="banner" style="width:100%;max-height: 300px;">
<?php else: ?>
<!--if multiple banners uploaded by admin-->
<!-- Start Slider -->
<div class="slider">
	
	
	<section class="main_slider">
	
   

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
<?php $__currentLoopData = $homeData->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        
        <?php if($key==0): ?>
      <div class="item active">
          <?php else: ?>
          <div class="item">
          <?php endif; ?>
        <img src="<?php echo asset('storage/uploads'.$banner['path']); ?>" alt="banner" style="width:100%;max-height: 300px;">
        
      </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
	  <img class="arrowLeft" src="<?php echo e(theme_asset('img/arrow-left.png')); ?>">
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	  <img class="arrowRight" src="<?php echo e(theme_asset('img/arrow-right.png')); ?>">
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  </section>
  
  

</div>
  <!-- End Slider -->
<?php endif; ?>
<?php endif; ?>