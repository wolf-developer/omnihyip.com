<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('addons::addon.name') !!} <small> {!! trans('app.manage') !!} {!! trans('addons::addon.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('addons::addon.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='addons-addon-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('addons/addon')!!}">{!! trans('addons::addon.names') !!}</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('addons/addon/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('addons::admin.addon.partial.actions')
                    -->
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="addons-addon-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th data-field="admin_user_login">{!! trans('addons::addon.label.admin_user_login')!!}</th>
                    <th data-field="add_bank">{!! trans('addons::addon.label.add_bank')!!}</th>
                    <th data-field="hide_compound_rate">{!! trans('addons::addon.label.hide_compound_rate')!!}</th>
                    <th data-field="provide_google_authentication">{!! trans('addons::addon.label.provide_google_authentication')!!}</th>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

var oTable;
var oSearch;
$(document).ready(function(){
    oTable = $('#addons-addon-list').dataTable( {
      
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('addons/addon') !!}',
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
            {data :'admin_user_login'},
            {data :'add_bank'},
            {data :'hide_compound_rate'},
            {data :'provide_google_authentication'},
        ],
        "pageLength": 25
    });

    $('#addons-addon-list tbody').on( 'click', 'tr td', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#addons-addon-list').DataTable().row( this ).data();
        $('#addons-addon-entry').load('{!!guard_url('addons/addon')!!}' + '/' + d.id);
    });


    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#addons-addon-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#addons-addon-list tbody').on('click', 'td.details-control', function (e) {
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