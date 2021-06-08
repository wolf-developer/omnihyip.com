<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 426px;">
<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="title1">
            <i class="fa fa-file-text-o"></i> <!--{!! trans('testimonial::testimonial.name') !!}--> <small> {!! trans('app.manage') !!} {!! trans('testimonial::testimonial.names') !!}</small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('testimonial::testimonial.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='testimonial-testimonial-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
				<li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('testimonial/testimonial')!!}">{!! trans('testimonial::testimonial.names') !!}</a></li>
                   <li class="pull-right">
                    <span class="actions">
                    @include('testimonial::admin.testimonial.partial.filter')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
				<div class="table-responsive">
                <table id="testimonial-testimonial-list" class="table table table-bordered data-table">
                    <thead class="list_head">
                       <th data-field="client_name">{!! trans('testimonial::testimonial.label.client_name')!!}</th>
                    <th data-field="status">{!! trans('testimonial::testimonial.label.status')!!}</th>                    
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
    app.load('#testimonial-testimonial-entry', '{!!guard_url('testimonial/testimonial/0')!!}');
    oTable = $('#testimonial-testimonial-list').dataTable( {
       
        
        "responsive" : true,
        "order": [[0, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('testimonial/testimonial') !!}',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $.each(oSearch, function(key, val){
                aoData.push( { 'name' : key, 'value' : val } );
            });
            app.dataTable(aoData);
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
            });
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },

        "columns": [
            {data :'client_name'},
            {data :'status'},            
        ],
        "pageLength": 25
    });

    $('#testimonial-testimonial-list tbody').on( 'click', 'tr td', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#testimonial-testimonial-list').DataTable().row( this ).data();
        $('#testimonial-testimonial-entry').load('{!!guard_url('testimonial/testimonial')!!}' + '/' + d.id);
    });

    $('#testimonial-testimonial-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#testimonial-testimonial-check-all").on( 'change', function (e) {
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
        $('#testimonial-testimonial-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#testimonial-testimonial-list tbody').on('click', 'td.details-control', function (e) {
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
