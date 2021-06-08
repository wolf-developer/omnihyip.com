
<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 256px;">
<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="title1">
            <i class="fa fa-file-text-o"></i><!-- {!! trans('plan::plan.name') !!}--> <small> {!! trans('app.manage') !!} {!! trans('plan::plan.names') !!}</small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('plan::plan.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='plan-plan-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('plan/plan')!!}">{!! trans('plan::plan.names') !!}</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('plan/plan/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('plan::admin.plan.partial.actions')
                    -->
                    @include('plan::admin.plan.partial.filter')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
				<div class="table-responsive">
                <table id="plan-plan-list" class="table table table-bordered data-table">
                    <thead class="list_head">                        
                    <th data-field="name">{!! trans('plan::plan.label.name')!!}</th>
                    <th data-field="min_investment">{!! trans('plan::plan.label.min_investment')!!}</th>
                    <th data-field="max_investment">{!! trans('plan::plan.label.max_investment')!!}</th>
                    <th data-field="interest_after_matured">{!! trans('plan::plan.label.interest_after_matured')!!}</th>
                    <th data-field="release_deposit">{!! trans('plan::plan.label.release_deposit')!!}</th>
                    <th data-field="profit">{!! trans('plan::plan.label.profit')!!}</th>
                    <th data-field="interest_period_type">{!! trans('plan::plan.label.interest_period_type')!!}</th>            
                    </thead>
                </table>
                </div>
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
    app.load('#plan-plan-entry', '{!!guard_url('plan/plan/0')!!}');
    oTable = $('#plan-plan-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            //'render': function (data, type, full, meta){
                //return '<input type="checkbox" name="id[]" value="' + data.id + '">';
           // }
        }], 
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('plan/plan') !!}',
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
            {data :'min_investment'},
            {data :'max_investment'},
            {data :'interest_after_matured'},
            {data :'release_deposit'},
            {data :'profit'},
            {data :'interest_period_type'},           
        ],
        "pageLength": 10
    });

    $('#plan-plan-list tbody').on( 'click', 'tr td', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#plan-plan-list').DataTable().row( this ).data();
        $('#plan-plan-entry').load('{!!guard_url('plan/plan')!!}' + '/' + d.id);
    });

    


    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#plan-plan-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#plan-plan-list tbody').on('click', 'td.details-control', function (e) {
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
