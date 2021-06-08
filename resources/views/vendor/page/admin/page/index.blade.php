<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">
<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
         <h3 class="title1">
            <i class="fa fa-book"></i>
            <!-- {!! trans('page::page.name') !!}--> <small> {!! trans('app.manage') !!} {!! trans('page::page.names') !!}</small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('page::page.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='page-page-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}">
                        <a href="{!!guard_url('page/page')!!}">{!! trans('page::page.names') !!}</a>
                    </li>
                    <li class="pull-right">
                    <span class="actions">   
                    @include('page::admin.page.partial.filter')
                   </span> 
                </li>
            </ul>
            <div class="tab-content">
				<div class="table-responsive">
                <table id="page-page-list" class="table table table-bordered data-table">
                    <thead class="list_head">
                     <th>{!! trans('page::page.label.name')!!}</th>
                    <th>{!! trans('page::page.label.title')!!}</th>
                    <th>{!! trans('page::page.label.url')!!}</th>
                    <th>{!! trans('page::page.label.heading')!!}</th>                    
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
var oSearch = [];
$(document).ready(function(){
    app.load('#page-page-entry', '{!!guard_url('page/page/0')!!}');
    oTable = $('#page-page-list').dataTable( {
       
        "responsive" : true,
        "order": [[0, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('page/page') !!}',
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
            {data :'name'},
            {data :'title'},
            {data :'url'},
            {data :'heading'},            
        ],
        "pageLength": 10
    });

    $('#page-page-list tbody').on( 'click', 'tr td', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#page-page-list').DataTable().row( this ).data();
        //alert('{!!guard_url('page/page')!!}' + '/' + d.id);
        $('#page-page-entry').load('{!!guard_url('page/page')!!}' + '/' + d.id);
    });
    
    // Add event listener for opening and closing details
    $('#page-page-list tbody').on('click', 'td.details-control', function (e) {
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
