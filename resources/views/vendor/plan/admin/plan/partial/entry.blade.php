<div class='row'>
    <div class='col-md-4 col-sm-6 required cpp tags'>
        {!! Form::text('name')
        -> label(trans('plan::plan.label.name'))
        -> required()
        -> placeholder(trans('plan::plan.placeholder.name'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::decimal('min_investment')
        -> label(trans('plan::plan.label.min_investment'))
        -> required()
        -> placeholder(trans('plan::plan.placeholder.min_investment'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::decimal('max_investment')
        -> label(trans('plan::plan.label.max_investment'))
        -> required()
        -> placeholder(trans('plan::plan.placeholder.max_investment'))!!}
    </div>





    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::number('profit')
        -> label(trans('plan::plan.label.profit'))
        -> required()
        -> placeholder(trans('plan::plan.placeholder.profit'))!!}
    </div>

    <div class='col-md-4 col-sm-6  required'>
        {!! Form::select('interest_period_type')
        -> options(trans('plan::plan.options.interest_period_type'))
        -> id('interest_period_type')
        -> label(trans('plan::plan.label.interest_period_type'))
        -> onclick('toggle_week_type()')
        -> placeholder(trans('plan::plan.placeholder.interest_period_type'))!!}
    </div>

    <div class='col-md-4 col-sm-6 cpp tags'>
        {!! Form::number('investment_duration')
        -> label(trans('plan::plan.label.investment_duration'))
        -> required()
        -> placeholder(trans('plan::plan.placeholder.investment_duration'))!!}
    </div>

    <div class='col-md-4 col-sm-6'>
        {!! Form::select('investment_duration_type')
        -> options(trans('plan::plan.options.investment_duration_type'))
        -> label(trans('plan::plan.label.investment_duration_type'))
        -> required()
        -> placeholder(trans('plan::plan.placeholder.investment_duration_type'))!!}
    </div>
    
    <div class='col-md-4 col-sm-6' id="week_type_div">
        {!! Form::select('week_type')
        -> options(trans('plan::plan.options.week_type'))
        -> label(trans('plan::plan.label.week_type'))
        -> placeholder(trans('plan::plan.placeholder.week_type'))!!}
    </div> 
  <div class='col-md-4 col-sm-6'>
        <div class="selectbox">
                    
        <input class="field" {{($plan->interest_after_matured==1)?'checked':''}} name="interest_after_matured" type="checkbox" value="{{($plan->interest_after_matured==1)?'1':'0'}}">
       <label for="interest_after_matured" class="control-label">{{trans('plan::plan.label.interest_after_matured')}}</label>    
       </div></div>
    <div class='col-md-4 col-sm-6'>
        <div class="selectbox">
                         
        <input class="field" {{($plan->release_deposit==1)?'checked':''}} name="release_deposit" type="checkbox" value="{{($plan->release_deposit==1)?'1':'0'}}">
    <label for="release_deposit" class="control-label">{{trans('plan::plan.label.release_deposit')}}</label>  
    </div></div>
</div>
<script>
$( document ).ready(function() {
    toggle_week_type();
    
$('#min_investment,#max_investment').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');
});

$("#name").focusout( function(e) {
    var reg =/<(.|\n)*?>/g; 
    if (reg.test($('#name').val()) == true) {
        alert('HTML Tag are not allowed');
    }
    e.preventDefault();
});
    
});
function toggle_week_type(){
	ip= $('#interest_period_type').val();
	if(ip=='Daily'){
		$('#week_type_div').show();
	}
	else{
		$('#week_type_div').hide();
		$('#week_type').prop('selectedIndex',0);
	}
	
}
</script>
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