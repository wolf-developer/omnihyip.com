<?php $homeData=$page;?>
@if(count($homeData->images)>0)
@if(count($homeData->images)==1)
<!--if single banner -->
<img src="{!!asset('storage/uploads'.$homeData->images[0]['path']) !!}" alt="banner" style="width:100%;max-height: 300px;">
@else
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
@foreach ($homeData->images as $key=>$banner)
        
        
        @if($key==0)
      <div class="item active">
          @else
          <div class="item">
          @endif
        <img src="{!!asset('storage/uploads'.$banner['path']) !!}" alt="banner" style="width:100%;max-height: 300px;">
        
      </div>
@endforeach  
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
	  <img class="arrowLeft" src="{{theme_asset('img/arrow-left.png')}}">
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	  <img class="arrowRight" src="{{theme_asset('img/arrow-right.png')}}">
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  </section>
  
  

</div>
  <!-- End Slider -->
@endif
@endif