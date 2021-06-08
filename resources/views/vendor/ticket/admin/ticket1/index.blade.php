<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('ticket::ticket.name') !!} <small> {!! trans('app.manage') !!} {!! trans('ticket::ticket.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('ticket::ticket.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='ticket-ticket-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('ticket/ticket')!!}">{!! trans('ticket::ticket.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('ticket/ticket?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('ticket/ticket?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
               
                    @include('ticket::admin.ticket.partial.filter')
                    @include('ticket::admin.ticket.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="ticket-ticket-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="ticket-ticket-check-all"></th>
                        <th data-field="ticket_code">{!! trans('ticket::ticket.label.ticket_code')!!}</th>
                    <th data-field="ticket_subject">{!! trans('ticket::ticket.label.ticket_subject')!!}</th>
                    <th data-field="ticket_body">{!! trans('ticket::ticket.label.ticket_body')!!}</th>
                    <th data-field="ticket_status">{!! trans('ticket::ticket.label.ticket_status')!!}</th>
                    <th data-field="ticket_user">{!! trans('ticket::ticket.label.ticket_user')!!}</th>
                    <th data-field="ticket_priority">{!! trans('ticket::ticket.label.ticket_priority')!!}</th>
                    <th data-field="ticket_file">{!! trans('ticket::ticket.label.ticket_file')!!}</th>
                    <th data-field="ticket_comment">{!! trans('ticket::ticket.label.ticket_comment')!!}</th>
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
    app.load('#ticket-ticket-entry', '{!!guard_url('ticket/ticket/0')!!}');
    oTable = $('#ticket-ticket-list').dataTable( {
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
        "sAjaxSource": '{!! guard_url('ticket/ticket') !!}',
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
            {data :'ticket_code'},
            {data :'ticket_subject'},
            {data :'ticket_body'},
            {data :'ticket_status'},
            {data :'ticket_user'},
            {data :'ticket_priority'},
            {data :'ticket_file'},
            {data :'ticket_comment'},
        ],
        "pageLength": 25
    });

    $('#ticket-ticket-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#ticket-ticket-list').DataTable().row( this ).data();
        $('#ticket-ticket-entry').load('{!!guard_url('ticket/ticket')!!}' + '/' + d.id);
    });

    $('#ticket-ticket-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#ticket-ticket-check-all").on( 'change', function (e) {
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
        $('#ticket-ticket-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#ticket-ticket-list tbody').on('click', 'td.details-control', function (e) {
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
