<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">
<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h3 class="title1">
            <i class="fa fa-file-text-o"></i> <!--{!! trans('faq::faq.name') !!}--> <small> {!! trans('app.manage') !!} {!! trans('faq::faq.names') !!}</small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('faq::faq.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='faq-faq-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('faq/faq')!!}">{!! trans('faq::faq.names') !!}</a></li>
                   
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('faq/faq/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('faq::admin.faq.partial.actions')
                    -->
                    @include('faq::admin.faq.partial.filter')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
				<div class="table-responsive">
                <table id="faq-faq-list" class="table table table-bordered data-table">
                    <thead class="list_head">
						<th data-field="question">{!! trans('faq::faq.label.question')!!}</th>
                   
                    <th data-field="created_at">{!! trans('faq::faq.label.created_at')!!}</th>
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
    app.load('#faq-faq-entry', '{!!guard_url('faq/faq/0')!!}');
    oTable = $('#faq-faq-list').dataTable( {
       
        
        "responsive" : true,
        "order": [[0, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('faq/faq') !!}',
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
           
            {data :'question'},
           
            {data :'created_at'},
        ],
        "pageLength": 25
    });

    $('#faq-faq-list tbody').on( 'click', 'tr td', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#faq-faq-list').DataTable().row( this ).data();
        $('#faq-faq-entry').load('{!!guard_url('faq/faq')!!}' + '/' + d.id);
    });

   


    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#faq-faq-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#faq-faq-list tbody').on('click', 'td.details-control', function (e) {
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
