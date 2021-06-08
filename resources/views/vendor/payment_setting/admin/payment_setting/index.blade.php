<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">

    <!-- Content Header (Page header) -->
    <section class="content-header">
         <h3 class="title1">
            <i class="fa fa-file-text-o"></i> <!--{!! trans('payment_setting::payment_setting.name') !!} --><small> {!! trans('app.manage') !!} {!! trans('payment_setting::payment_setting.names') !!}</small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('payment_setting::payment_setting.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='payment_setting-payment_setting-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('payment_setting/payment_setting')!!}">{!! trans('payment_setting::payment_setting.names') !!}</a></li>
<!--                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('payment_setting/payment_setting?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('payment_setting/payment_setting?status=deleted')!!}">Trashed</a></li>-->
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('payment_setting/payment_setting/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('payment_setting::admin.payment_setting.partial.actions')
                    -->
                    @include('payment_setting::admin.payment_setting.partial.filter')
                    @include('payment_setting::admin.payment_setting.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
				<div class="table-responsive">
                <table id="payment_setting-payment_setting-list" class="table table table-bordered data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="payment_setting-payment_setting-check-all"></th>
                        <th data-field="perfect_money_member_id">{!! trans('payment_setting::payment_setting.label.perfect_money_member_id')!!}</th>
                    <th data-field="perfect_money_account_id">{!! trans('payment_setting::payment_setting.label.perfect_money_account_id')!!}</th>
                    <th data-field="perfect_money_phrase_hash">{!! trans('payment_setting::payment_setting.label.perfect_money_phrase_hash')!!}</th>
                    <th data-field="paypal_business_id">{!! trans('payment_setting::payment_setting.label.paypal_business_id')!!}</th>
                    <th data-field="coin_public_key">{!! trans('payment_setting::payment_setting.label.coin_public_key')!!}</th>
                    <th data-field="coin_p_pvt_key">{!! trans('payment_setting::payment_setting.label.coin_p_pvt_key')!!}</th>
                    <th data-field="coin_payments_ipn_key">{!! trans('payment_setting::payment_setting.label.coin_payments_ipn_key')!!}</th>
                    <th data-field="coin_p_merchant_id">{!! trans('payment_setting::payment_setting.label.coin_p_merchant_id')!!}</th>
                    <th data-field="payeer_shop_id">{!! trans('payment_setting::payment_setting.label.payeer_shop_id')!!}</th>
                    <th data-field="payeer_shop_secret_key">{!! trans('payment_setting::payment_setting.label.payeer_shop_secret_key')!!}</th>
                    <th data-field="payeer_account">{!! trans('payment_setting::payment_setting.label.payeer_account')!!}</th>
                    <th data-field="payeer_api_user">{!! trans('payment_setting::payment_setting.label.payeer_api_user')!!}</th>
                    <th data-field="payeer_api_secret">{!! trans('payment_setting::payment_setting.label.payeer_api_secret')!!}</th>
                    <th data-field="advcash_email">{!! trans('payment_setting::payment_setting.label.advcash_email')!!}</th>
                    <th data-field="advcash_sci_name">{!! trans('payment_setting::payment_setting.label.advcash_sci_name')!!}</th>
                    <th data-field="advcash_sci_batch_key">{!! trans('payment_setting::payment_setting.label.advcash_sci_batch_key')!!}</th>
                    <th data-field="advcash_withdraw_email">{!! trans('payment_setting::payment_setting.label.advcash_withdraw_email')!!}</th>
                    <th data-field="advcash_api_name">{!! trans('payment_setting::payment_setting.label.advcash_api_name')!!}</th>
                    <th data-field="advcash_api_password">{!! trans('payment_setting::payment_setting.label.advcash_api_password')!!}</th>
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
    app.load('#payment_setting-payment_setting-entry', '{!!guard_url('payment_setting/payment_setting/0')!!}');
    oTable = $('#payment_setting-payment_setting-list').dataTable( {
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
        "sAjaxSource": '{!! guard_url('payment_setting/payment_setting') !!}',
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
            {data :'perfect_money_member_id'},
            {data :'perfect_money_account_id'},
            {data :'perfect_money_phrase_hash'},
            {data :'paypal_business_id'},
            {data :'coin_public_key'},
            {data :'coin_p_pvt_key'},
            {data :'coin_payments_ipn_key'},
            {data :'coin_p_merchant_id'},
            {data :'payeer_shop_id'},
            {data :'payeer_shop_secret_key'},
            {data :'payeer_account'},
            {data :'payeer_api_user'},
            {data :'payeer_api_secret'},
            {data :'advcash_email'},
            {data :'advcash_sci_name'},
            {data :'advcash_sci_batch_key'},
            {data :'advcash_withdraw_email'},
            {data :'advcash_api_name'},
            {data :'advcash_api_password'},
        ],
        "pageLength": 25
    });

    $('#payment_setting-payment_setting-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#payment_setting-payment_setting-list').DataTable().row( this ).data();
        $('#payment_setting-payment_setting-entry').load('{!!guard_url('payment_setting/payment_setting')!!}' + '/' + d.id);
    });

    $('#payment_setting-payment_setting-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#payment_setting-payment_setting-check-all").on( 'change', function (e) {
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
        $('#payment_setting-payment_setting-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#payment_setting-payment_setting-list tbody').on('click', 'td.details-control', function (e) {
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
