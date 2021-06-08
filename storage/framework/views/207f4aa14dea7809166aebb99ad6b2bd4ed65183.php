<div class='row'>
                <div class='col-md-4 col-sm-6 cpp tags'>
                       <?php echo Form::text('name')
                       -> label(trans('user::client.label.name'))
                       -> placeholder(trans('user::client.placeholder.name')); ?>

                </div>

                <div class='col-md-4 col-sm-6 cpp tags'>
                       <?php echo Form::email('email')
                       -> label(trans('user::client.label.email'))
                       -> placeholder(trans('user::client.placeholder.email')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::password('password')
                       -> label(trans('user::client.label.password'))
                       -> placeholder(trans('user::client.placeholder.password')); ?>

                </div>              

                <div class='col-md-4 col-sm-6 cpp tags'>
                       <?php echo Form::text('mobile')
                       -> label(trans('user::client.label.mobile'))
                       ->pattern("[1-9]{1}[0-9]{9}")
                       ->maxlength("10")
                       ->title("Please enter valid mobile No:xxxxxxxxxx")
                       -> placeholder(trans('user::client.placeholder.mobile')); ?>

                      
                </div>               

                <div class='col-md-4 col-sm-6 cpp tags'>
                    <?php echo Form::textarea ('address')
                    -> label(trans('user::client.label.address'))
                    -> placeholder(trans('user::client.placeholder.address')); ?>

                </div>
                
                 <div class='col-md-4 col-sm-6'>
                    <?php echo Form::textarea ('referral_code')
                    -> label(trans('Referral Code'))
                    -> placeholder(trans('Referral Code')); ?>

                </div>
                
                <div class='col-md-4 col-sm-6'>
                    <?php echo Form::select('status')
                    -> options(trans('user::client.options.status'))
                    -> label(trans('user::client.label.status'))
                    -> placeholder(trans('user::client.placeholder.status')); ?>

                </div>
            </div>
            <script>
            $('document').ready(function(){
               $("#name, #address").on('keypress', function (event) {
                 var regex = new RegExp("^[a-zA-Z0-9_ ]*$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                    event.preventDefault();
                    alert("Please enter valid data");
                    return false;
                }
            });
            $("#referral_code").on('keypress', function (event) {
                 var regex = new RegExp("^[a-zA-Z0-9]*$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                    event.preventDefault();
                    alert("Please enter valid data for referral code");
                    return false;
                }
            });
            
           $("#mobile").on('keypress', function (event) {
                 var regex = new RegExp("^[0-9]*$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                    event.preventDefault();
                    alert("Please enter valid data");
                    return false;
                }
            });
            $("#password").focusout( function(e) {
            var reg =/<(.|\n)*?>/g; 
            if (reg.test($('#password').val()) == true) {
                alert('HTML Tag are not allowed');
            }
            e.preventDefault();
        });
            });
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
