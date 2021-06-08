<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> <!--{!! trans('company_setting::company_setting.name') !!}--> <small> {!! trans('app.manage') !!} {!! trans('company_setting::company_setting.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('company_setting::company_setting.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='company_setting-company_setting-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('company_setting/company_setting')!!}">{!! trans('company_setting::company_setting.names') !!}</a></li>
                      <li class="pull-right">
                    <span class="actions">
                  </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="company_setting-company_setting-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th data-field="company_name">{!! trans('company_setting::company_setting.label.company_name')!!}</th>
                    <th data-field="company_legal_name">{!! trans('company_setting::company_setting.label.company_legal_name')!!}</th>
                    <th data-field="company_start">{!! trans('company_setting::company_setting.label.company_start')!!}</th>   
                    <th data-field="company_country">{!! trans('company_setting::company_setting.label.company_country')!!}</th>
                    <th data-field="company_city">{!! trans('company_setting::company_setting.label.company_city')!!}</th>             
                    <th data-field="company_phone">{!! trans('company_setting::company_setting.label.company_phone')!!}</th>
                    <th data-field="company_email">{!! trans('company_setting::company_setting.label.company_email')!!}</th>
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
    app.load('#company_setting-company_setting-entry', '{!!guard_url('company_setting/company_setting/0')!!}');
    oTable = $('#company_setting-company_setting-list').dataTable( {
        
        
        "responsive" : true,
        "order": [[0, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('company_setting/company_setting') !!}',
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
            {data :'company_name'},
            {data :'company_legal_name'},
            {data :'company_start'},            
            {data :'company_country'},
            {data :'company_city'},            
            {data :'company_phone'},
            {data :'company_email'},
        ],
        "pageLength": 25
    });

    $('#company_setting-company_setting-list tbody').on( 'click', 'tr td', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#company_setting-company_setting-list').DataTable().row( this ).data();
        $('#company_setting-company_setting-entry').load('{!!guard_url('company_setting/company_setting')!!}' + '/' + d.id);
    });

    $('#company_setting-company_setting-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#company_setting-company_setting-check-all").on( 'change', function (e) {
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
        $('#company_setting-company_setting-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#company_setting-company_setting-list tbody').on('click', 'td.details-control', function (e) {
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
