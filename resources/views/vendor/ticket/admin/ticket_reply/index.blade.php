<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">
<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> <!--{!! trans('ticket::ticket_reply.name') !!}--> <small> {!! trans('app.manage') !!} {!! trans('ticket::ticket_reply.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('ticket::ticket_reply.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='ticket-ticket_reply-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('ticket/ticket_reply')!!}">{!! trans('ticket::ticket_reply.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('ticket/ticket_reply?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('ticket/ticket_reply?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('ticket/ticket_reply/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('ticket::admin.ticket_reply.partial.actions')
                    -->
                    @include('ticket::admin.ticket_reply.partial.filter')
                    @include('ticket::admin.ticket_reply.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="ticket-ticket_reply-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="ticket-ticket_reply-check-all"></th>
                        <th data-field="ticket_id">{!! trans('ticket::ticket_reply.label.ticket_id')!!}</th>
                    <th data-field="body">{!! trans('ticket::ticket_reply.label.body')!!}</th>
                    <th data-field="replier_id">{!! trans('ticket::ticket_reply.label.replier_id')!!}</th>
                    <th data-field="attachment">{!! trans('ticket::ticket_reply.label.attachment')!!}</th>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>
</div>

<script type="text/javascript">

var oTable;
var oSearch;
$(document).ready(function(){
    app.load('#ticket-ticket_reply-entry', '{!!guard_url('ticket/ticket_reply/0')!!}');
    oTable = $('#ticket-ticket_reply-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, full, meta){
                return '<input type="checkbox" name="id[]" value="' + data.id + '">';
            }
        }], 
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('ticket/ticket_reply') !!}',
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
            {data :'ticket_id'},
            {data :'body'},
            {data :'replier_id'},
            {data :'attachment'},
        ],
        "pageLength": 25
    });

    $('#ticket-ticket_reply-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#ticket-ticket_reply-list').DataTable().row( this ).data();
        $('#ticket-ticket_reply-entry').load('{!!guard_url('ticket/ticket_reply')!!}' + '/' + d.id);
    });

    $('#ticket-ticket_reply-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#ticket-ticket_reply-check-all").on( 'change', function (e) {
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
        $('#ticket-ticket_reply-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#ticket-ticket_reply-list tbody').on('click', 'td.details-control', function (e) {
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
