            <div class='row cpp tags'>
				<?php $refer=getCompanyinfo('maxreferral');
		$i=1;
		
		for($i=1; $i<=$refer; $i++){
			if($i<=$refer){
		?>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('ref_level_'.$i)
                       -> label(trans('affiliate::affiliate.label.ref_level').' '.$i)
                       -> required()
                       ->class('form-control floatNumber')
                       ->onkeypress('isNumberKey(event)')
                       -> placeholder(trans('affiliate::affiliate.placeholder.ref_level').' '.$i)!!}
                       
                       
                        
                </div>
 
    <?php 
	}
	else{ ?>
		{!! Form::hidden('ref_level_'.$i)
                       -> forceValue(0)!!}
	<?php
	}
    } ?>
            </div>
<script>
$(document).ready(function(){

    $('.cpp').on("cut copy paste",function(e) {
        e.preventDefault();
        alert("You cannot copy and paste into this text field.");
    });

    $('.tags').on("keydown", function(e){
        if (e.shiftKey && (e.which == 188 || e.which == 190)) {
        e.preventDefault();
        alert("You cannot add tags in the field.");
        }
    });
});
</script>