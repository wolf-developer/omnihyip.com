<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 256px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
         <h3 class="title1">
            <i class="fa fa-file-text-o"></i> <!--{!! trans('transactions::history.withdraw_requests') !!}--> <small> {!! trans('app.manage') !!} {!! trans('transactions::history.withdraw_requests') !!}</small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('transactions::history.withdraw_requests') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='transactions-history-entry'>
    </div>
        <div class="nav-tabs-custom">
            
            <div class="tab-content">
				<div class="table-responsive">
                <table id="transactions-history-list" class="table table table-bordered data-table">
                    <thead class="list_head">
                        
                        <th data-field="user_id">{!! trans('transactions::history.label.user_id')!!}</th>
                    <th data-field="amount">{!! trans('transactions::history.label.amount')!!}</th>
                    <th data-field="description">{!! trans('transactions::history.label.description')!!}</th>
                    <th data-field="payment_thro">{!! trans('transactions::history.label.payment_thro')!!}</th>
                    <th data-field="transaction_id">{!! trans('transactions::history.label.transaction_id')!!}</th>
                    <th data-field="created_at">{!! trans('transactions::history.label.created_at')!!}</th>
                    <th style="text-align: right;" width="1%">Action</th>
                    </thead>
                </table>
            </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

var oTable;
var oSearch;
$(document).ready(function(){
    //app.load('#transactions-history-entry', '{!!guard_url('transactions/history/0')!!}');
    oTable = $('#transactions-history-list').dataTable( {
        'columnDefs': [{
            'targets': 6,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, full, meta){
				withdraw_id = full.real_id;
                return '<a href="javascript:void(0)" onclick="approve_withdraw('+withdraw_id+')" class="btn btn-success">Approve</a>&nbsp;<a href="javascript:void(0)" onclick="disapprove_withdraw('+withdraw_id+')" class="btn btn-success">Disapprove</a>&nbsp;<a class="btn btn-danger" href="javascript:void(0)" onclick="delete_request('+withdraw_id+')">Delete</a>';
            }
        }], 
        
        "responsive" : true,
        "order": [[0, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('transactions/withdraw_requests') !!}',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $.each(oSearch, function(key, val){
                aoData.push( { 'name' : key, 'value' : val } );
            });
            app.dataTable(aoData);
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },

        "columns": [
            {data :'user_id'},
            {data :'amount'},
            {data :'description'},
            {data :'payment_thro'},
            {data :'transaction_id'},
            {data :'created_at'},
        ],
        "pageLength": 25
    });

    /*$('#transactions-history-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#transactions-history-list').DataTable().row( this ).data();
        $('#transactions-history-entry').load('{!!guard_url('transactions/history')!!}' + '/' + d.id);
    });*/

    $('#transactions-history-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#transactions-history-check-all").on( 'change', function (e) {
        e.preventDefault();
        aIds = [];
        if ($(this).prop('checked')) {
            $("input[name^='id[]']").each(function(){
                $(this).prop('checked',true);
                aIds.push($(this).val());
            });

            return;
        }else{
            $("input[name^='id[]']").prop('checked',false);
        }
        
    });


    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#transactions-history-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#transactions-history-list tbody').on('click', 'td.details-control', function (e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    });

});


function approve_withdraw(id){
	$.ajax({
                    url: "{{guard_url('transactions/approve')}}",
                    type: 'POST',
                    data: {'id' : id},
                    success:function(data, textStatus, jqXHR)
                    {
						msg = JSON.parse(data);
                        swal({
						  title: "Updates!",
						  text: msg.message,
						  type: "success",
						  confirmButtonText: "OK"
						});
						setTimeout(function(){
						   window.location.reload(1);
						}, 2000);
                        //location.reload();
                    },
                    error:function(data, textStatus, jqXHR)
                    {
						msg = JSON.parse(data);
                        swal("Failed!", msg.message, "error");
                    },
                });
}

function disapprove_withdraw(id){
    
        
if(!confirm('Are you sure you want to disapprove this withdraw')){
   return false;
}

$('#myModal1 #id').val(id);
$('#myModal1').show();
   
}


function delete_request(id){
	$.ajax({
                    url: "{{guard_url('transactions/delete_request')}}",
                    type: 'POST',
                    data: {'id' : id},
                    success:function(data, textStatus, jqXHR)
                    {
						msg = JSON.parse(data);
                        swal({
						  title: "Updates!",
						  text: msg.message,
						  type: "success",
						  confirmButtonText: "OK"
						});
						setTimeout(function(){
						   window.location.reload(1);
						}, 2000);
                    },
                    error:function(data, textStatus, jqXHR)
                    {
						msg = JSON.parse(data);
                        swal("Failed!", msg.message, "error");
                    },
                });
}
</script>


<div class="modal" id="myModal1">
  <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close close1" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reason for Disapprove</h4>
        </div>
        <div class="modal-body">
			
			
          <p>{!!Form::open()

                        ->class('form form-groups-bordered ads-form')

                        ->id('deposit-pay')
                        ->files(true)
                        ->enctype('multipart/form-data')
                        ->method('POST')            
                        ->action(guard_url('transactions/disapprove'))!!}
                        {{ csrf_field() }}
<input type="hidden" name="id" id="id">

<h5>Reason</h5>
	<div class="form-group">
		<textarea type="text" name="reason" class="form-control" required  id="reason"></textarea>
	</div>
	<div class="modal-footer">
            <input type="submit" id="sbtn" class="btn btn-primary pull-left" value="Submit">
          <button type="button" class="btn btn-success cls-btn pull-right" id="close_btn1" data-dismiss="modal">Close</button>
        </div>
	
{!! Form::close() !!}</p>
                                
        </div>
        
      </div>
      </div>
  </div>
  <style>
  
  .cls-btn {
    background: transparent !important;
    border: 1px solid #397fb7 !important;
}
  </style>
