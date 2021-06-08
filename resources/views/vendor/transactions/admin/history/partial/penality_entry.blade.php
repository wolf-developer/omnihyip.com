<?php $users = get_user_list();?>

<div class='row'>
    <div class='col-md-6 col-sm-6 cpp tags'>
        {!! Form::number('amount')
        -> label(trans('transactions::history.label.amount'))
        -> required()
        ->min(1)
        -> placeholder(trans('transactions::history.placeholder.amount'))!!}
    </div>
    <div class='col-md-6 col-sm-6 cpp tags'>
        {!! Form::text('description')
        -> label(trans('transactions::history.label.description'))
        -> placeholder(trans('transactions::history.placeholder.description'))!!}

        {!! Form::hidden('payment_thro')
        -> value('USD')!!}
        {!! Form::hidden('transaction_type')
        -> value('penality')!!}
    </div> 
       <div class='col-md-12 col-sm-12'>
        
        <div class="form-group required"><label for="amount" class="control-label">Users</label><br>
         <div><input type="checkbox" id="checkAll">Select All</div><br/>
        <table class="table table-striped data-table dataTable no-footer dtr-inline" id="myTable">
          <thead>  <tr><th></th><th>Name</th></tr></thead>
            
                <tbody>
            <?php foreach($users as $key=>$val){ ?>
            <tr>
                <td><input type="checkbox" name="users[]" value="<?php echo $key;?>"></td>
                <td><?php echo $val;?></td>
                
            </tr>
            <?php } ?>
            </tbody>
            
            </table>
        </div>
    </div>
    
</div>
<script>
    $("#checkAll").click(function () {
         $('input:checkbox').not(this).prop('checked', this.checked);
     });
  
</script>
<script type="text/javascript">

var oTable;
$(document).ready(function(){
     oTable = $('#myTable').dataTable( {
        "pageLength": 50
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