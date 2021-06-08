            <div class='row'>
                <div class='col-md-6 col-sm-6 cpp tags'>
                       {!! Form::text('withdraw_minimum')
                       -> label(trans('payout::payout.label.withdraw_minimum'))
                       -> required()
                       -> placeholder(trans('payout::payout.placeholder.withdraw_minimum'))!!}
                </div>

                <div class='col-md-6 col-sm-6 cpp tags'>
                       {!! Form::text('withdraw_maximum')
                       -> label(trans('payout::payout.label.withdraw_maximum'))
                       -> required()
                       -> placeholder(trans('payout::payout.placeholder.withdraw_maximum'))!!}
                </div>

                <div class='col-md-6 col-sm-6 cpp tags'>
                       {!! Form::text('withdraw_allow_month')
                       -> label(trans('payout::payout.label.withdraw_allow_month'))
                       -> required()
                       -> placeholder(trans('payout::payout.placeholder.withdraw_allow_month'))!!}
                </div>
               <div class='col-md-6 col-sm-6'>
					{!! Form::select('work_from_cron')
						-> label(trans('payout::payout.label.work_from_cron'))
						-> options(trans('payout::payout.options.work_from_cron'))!!}
                </div>
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
    $('#withdraw_minimum, #withdraw_maximum').on('keypress', function (event) {
        var regex = new RegExp("^[0-9.]*$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            alert("Please enter only numeric values");
            return false;
        }
    });
    $('#withdraw_allow_month').on('keypress', function (event) {
        var regex = new RegExp("^[0-9]*$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            alert("Please enter only numeric values");
            return false;
        }
    });
});
</script>
