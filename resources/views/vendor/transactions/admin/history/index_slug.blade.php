<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">
    @include('notifications')
<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="title1">
            <i class="fa fa-file-text-o"></i> {!! trans('transactions::history.'.$slug) !!} 
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('transactions::history.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='transactions-history-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('transactions/history')!!}">{!! trans('transactions::history.names') !!}</a></li>
                    <li class="pull-right">
                    <span class="actions">
                   
                    @include('transactions::admin.history.partial.filter')
                    </span> 
                </li>
            </ul>
            
            <div class="tab-content">
				<div class="table-responsive">
                <table id="transactions-history-list" class="table table table-bordered data-table">
                    <thead class="list_head">
                        <th data-field="created_at">{!! trans('transactions::history.label.created_at')!!}</th> 
                        <th data-field="user_id">{!! trans('transactions::history.label.user_id')!!}</th>
                        <th data-field="email">{!! trans('transactions::history.label.email')!!}</th>
                    <th data-field="amount">{!! trans('transactions::history.label.amount')!!}</th>
                    <th data-field="transaction_type">{!! trans('transactions::history.label.transaction_type')!!}</th>
                    <th data-field="transaction_id">{!! trans('transactions::history.label.transaction_id')!!}</th>
                    <th data-field="payment_thro">{!! trans('transactions::history.label.payment_thro')!!}</th>                  <th data-field="description">{!! trans('transactions::history.label.description')!!}</th>  
                                       
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
    //app.load('#transactions-history-entry', '{!!guard_url('transactions/history/0')!!}');
    oTable = $('#transactions-history-list').dataTable( {
       
        
        "responsive" : true,
        "order": [[0, 'desc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('transactions/transaction/'.$slug) !!}',
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
            {data :'created_at'},
            {data :'user_id'},
            {data :'email'},
            {data :'amount'},
            {data :'transaction_type'},
            {data :'transaction_id'},
            {data :'payment_thro'},
            {data :'description'},
        ],
        "pageLength": 25
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
</script>
