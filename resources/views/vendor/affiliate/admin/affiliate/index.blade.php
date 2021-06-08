<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="title1">
            <i class="fa fa-file-text-o"></i> <!--{!! trans('affiliate::affiliate.name') !!}--> <small> {!! trans('app.manage') !!} {!! trans('affiliate::affiliate.names') !!}</small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('affiliate::affiliate.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='affiliate-affiliate-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('affiliate/affiliate')!!}">{!! trans('affiliate::affiliate.names') !!}</a></li>
                   
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('affiliate/affiliate/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('affiliate::admin.affiliate.partial.actions')
                    -->
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
				<div class="table-responsive">
                <table id="affiliate-affiliate-list" class="table table table-bordered data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"></th>
                        <th data-field="ref_level_1">{!! trans('affiliate::affiliate.label.ref_level_1')!!}</th>
                   <th data-field="ref_level_2">{!! trans('affiliate::affiliate.label.ref_level_2')!!}</th>
                    <th data-field="ref_level_3">{!! trans('affiliate::affiliate.label.ref_level_3')!!}</th>
                    <th data-field="ref_level_4">{!! trans('affiliate::affiliate.label.ref_level_4')!!}</th>
                    <th data-field="ref_level_5">{!! trans('affiliate::affiliate.label.ref_level_5')!!}</th>
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
    
    
    
    app.load('#affiliate-affiliate-entry', '{!!guard_url('affiliate/affiliate/0')!!}');
    oTable = $('#affiliate-affiliate-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, full, meta){
                return '';
            }
        }], 
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('affiliate/affiliate') !!}',
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
            {data :'id'},
            {data :'ref_level_1'},
            {data :'ref_level_2'},
            {data :'ref_level_3'},
           {data :'ref_level_4'},
            {data :'ref_level_5'},
        ],
        "pageLength": 25
    });

    $('#affiliate-affiliate-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#affiliate-affiliate-list').DataTable().row( this ).data();
        $('#affiliate-affiliate-entry').load('{!!guard_url('affiliate/affiliate')!!}' + '/' + d.id);
    });

    $('#affiliate-affiliate-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#affiliate-affiliate-check-all").on( 'change', function (e) {
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
        $('#affiliate-affiliate-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#affiliate-affiliate-list tbody').on('click', 'td.details-control', function (e) {
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
