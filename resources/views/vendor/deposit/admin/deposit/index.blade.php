<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">
<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
         <h3 class="title1">
            <i class="fa fa-file-text-o"></i> {!! trans('deposit::deposit.name') !!} <small> {!! trans('app.manage') !!} {!! trans('deposit::deposit.names') !!}</small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('deposit::deposit.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='deposit-deposit-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('deposit/deposit')!!}">{!! trans('deposit::deposit.names') !!}</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    
                    @include('deposit::admin.deposit.partial.filter')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
				<div class="table-responsive">
                <table id="deposit-deposit-list" class="table table table-bordered data-table">
                    <thead class="list_head">
					<th data-field="user_id">{!! trans('deposit::deposit.label.user_id')!!}</th>
                    <th data-field="plan_id">{!! trans('deposit::deposit.label.plan_id')!!}</th>
                    <th data-field="amount">{!! trans('deposit::deposit.label.amount')!!}</th>
                    <th data-field="payment_thro">{!! trans('deposit::deposit.label.payment_thro')!!}</th>
                    <th data-field="transaction_id">{!! trans('deposit::deposit.label.transaction_id')!!}</th>
                    <th data-field="investment_date">{!! trans('deposit::deposit.label.investment_date')!!}</th>
                    <th data-field="maturity_date">{!! trans('deposit::deposit.label.maturity_date')!!}</th>
                    <th data-field="status">{!! trans('deposit::deposit.label.status')!!}</th>
                    </thead>
                </table>
                </div>
            </div>
        </div>
    </section>
</div>
</div>

<script type="text/javascript">

var oTable;
var oSearch;
$(document).ready(function(){
    //app.load('#deposit-deposit-entry', '{!!guard_url('deposit/deposit/0')!!}');
    oTable = $('#deposit-deposit-list').dataTable( {
       
        
        "responsive" : true,
        "order": [[0, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('deposit/deposit') !!}',
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
            {data :'plan_id'},
            {data :'amount'},
            {data :'payment_thro'},
            {data :'transaction_id'},
            {data :'investment_date'},
            {data :'maturity_date'},
            {data :'status'},
        ],
        "pageLength": 25
    });

 

    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#deposit-deposit-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#deposit-deposit-list tbody').on('click', 'td.details-control', function (e) {
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
</script>
