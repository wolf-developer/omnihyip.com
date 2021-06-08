<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">
<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="title1">
            <i class="fa fa-file-text-o"></i> {!! trans('user::client.name', ['client' => $type]) !!} <small> <!--{!! trans('app.manage') !!} {!! trans('user::client.names', ['client' => $type]) !!}--></small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('user::client.names', ['client' => $type]) !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='user-client-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('user/'.$type)!!}">{!! trans('user::client.names', ['client' => $type]) !!}</a></li>
                    
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('user/client/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('user::default.partial.actions')
                    -->
                    @include('user::default.partial.filter')
                   
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
				<div class="table-responsive">
                <table id="user-client-list" class="table table table-bordered data-table">
                    <thead class="list_head">                        
                        <th data-field="name">{!! trans('user::client.label.name')!!}</th>
                    <th data-field="email">{!! trans('user::client.label.email')!!}</th>                    
                    <th data-field="mobile">{!! trans('user::client.label.mobile')!!}</th>                    
                     <th data-field="address">{!! trans('user::client.label.address')!!}</th> 
                     <th data-field="status">{!! trans('user::client.label.status')!!}</th>
                     <th data-field="referral_code">{!! trans('user::client.label.referral_code')!!}</th>
                    <th data-field="photo">{!! trans('user::client.label.photo')!!}</th>                    
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
    app.load('#user-client-entry', '{!!guard_url('user/' . $type . '/0')!!}');
    oTable = $('#user-client-list').dataTable( {
         
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('user/'.$type) !!}',
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
            {data :'email'},            
            {data :'mobile'},            
            {data :'address'},
            {data :'status'},
            {data :'referral_code'},
            {data :'photo'},            
        ],
        "pageLength": 25
    });

    $('#user-client-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#user-client-list').DataTable().row( this ).data();
        $('#user-client-entry').load('{!!guard_url('user/'.$type)!!}' + '/' + d.id);
    });

    $('#user-client-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#user-client-check-all").on( 'change', function (e) {
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
        $('#user-client-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#user-client-list tbody').on('click', 'td.details-control', function (e) {
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
