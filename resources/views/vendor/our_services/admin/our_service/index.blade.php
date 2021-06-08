<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">
<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="title1">
            <i class="fa fa-file-text-o"></i> <!--{!! trans('our_services::our_service.name') !!}--> <small> {!! trans('app.manage') !!} {!! trans('our_services::our_service.names') !!}</small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('our_services::our_service.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='our_services-our_service-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('our_services/our_service')!!}">{!! trans('our_services::our_service.names') !!}</a></li>                   
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('our_services/our_service/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('our_services::admin.our_service.partial.actions')
                    -->
                    @include('our_services::admin.our_service.partial.filter')                   
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
				<div class="table-responsive">
                <table id="our_services-our_service-list" class="table table table-bordered data-table">
                    <thead class="list_head">
                        
                        <th data-field="title">{!! trans('our_services::our_service.label.title')!!}</th>
                    <th data-field="created_at">{!! trans('our_services::our_service.label.created_at')!!}</th>
                    
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
    app.load('#our_services-our_service-entry', '{!!guard_url('our_services/our_service/0')!!}');
    oTable = $('#our_services-our_service-list').dataTable( {
        
        
        "responsive" : true,
        "order": [[0, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('our_services/our_service') !!}',
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
    
            {data :'title'},
            {data :'created_at'},
            
        ],
        "pageLength": 25
    });

    $('#our_services-our_service-list tbody').on( 'click', 'tr td', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#our_services-our_service-list').DataTable().row( this ).data();
        $('#our_services-our_service-entry').load('{!!guard_url('our_services/our_service')!!}' + '/' + d.id);
    });

    $('#our_services-our_service-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#our_services-our_service-check-all").on( 'change', function (e) {
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
        $('#our_services-our_service-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#our_services-our_service-list tbody').on('click', 'td.details-control', function (e) {
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
