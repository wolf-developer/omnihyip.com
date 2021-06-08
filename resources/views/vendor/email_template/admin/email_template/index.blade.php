<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">
<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="title1">
            <i class="fa fa-file-text-o"></i> <!--{!! trans('email_template::email_template.name') !!}--> <small> {!! trans('app.manage') !!} {!! trans('email_template::email_template.names') !!}</small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('email_template::email_template.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='email_template-email_template-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('email_template/email_template')!!}">{!! trans('email_template::email_template.names') !!}</a></li>
                   
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('email_template/email_template/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('email_template::admin.email_template.partial.actions')
                    -->
                    @include('email_template::admin.email_template.partial.filter')
                    
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
				<div class="table-responsive">
                <table id="email_template-email_template-list" class="table table table-bordered data-table">
                    <thead class="list_head">                        
                        <th data-field="subject">{!! trans('email_template::email_template.label.subject')!!}</th>
                    
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
    app.load('#email_template-email_template-entry', '{!!guard_url('email_template/email_template/0')!!}');
    oTable = $('#email_template-email_template-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            //'render': function (data, type, full, meta){
            //    return '<input type="checkbox" name="id[]" value="' + data.id + '">';
           // }
        }], 
        
        "responsive" : true,
        "order": [[0, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('email_template/email_template') !!}',
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
            {data :'subject'},
            
        ],
        "pageLength": 25
    });

    $('#email_template-email_template-list tbody').on( 'click', 'tr td', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#email_template-email_template-list').DataTable().row( this ).data();
        $('#email_template-email_template-entry').load('{!!guard_url('email_template/email_template')!!}' + '/' + d.id);
    });

    $('#email_template-email_template-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#email_template-email_template-check-all").on( 'change', function (e) {
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
        $('#email_template-email_template-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#email_template-email_template-list tbody').on('click', 'td.details-control', function (e) {
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
