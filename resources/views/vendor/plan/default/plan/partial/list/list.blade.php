                    <div class="list-view">
						<div class="tab-content">
                <table id="plan-plan-list" class="table table-striped data-table">
                    <thead class="list_head">
						<tr>
                    <th data-field="name">{!! trans('plan::plan.label.name')!!}</th>
                    <th data-field="min_investment">{!! trans('plan::plan.label.min_investment')!!}</th>
                    <th data-field="max_investment">{!! trans('plan::plan.label.max_investment')!!}</th>
                    <th data-field="interest_after_matured">{!! trans('plan::plan.label.interest_after_matured')!!}</th>
                    <th data-field="release_deposit">{!! trans('plan::plan.label.release_deposit')!!}</th>
                    <th data-field="profit">{!! trans('plan::plan.label.profit')!!}</th>
                    <th data-field="interest_period_type">{!! trans('plan::plan.label.interest_period_type')!!}</th>
                    <th data-field="investment_duration">{!! trans('plan::plan.label.investment_duration')!!}</th>
                    <th data-field="investment_duration_type">{!! trans('plan::plan.label.investment_duration_type')!!}</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
						@forelse($plans as $plan)
						<tr>
						<td><a  href="{!! trans_url('plans') !!}/{!! $plan->getPublicKey() !!}" target="_blank">{!! $plan->name !!}</a></td>
                        <td>{!! $plan->min_investment !!}</td>
                        <td>{!! $plan->max_investment !!}</td>
                        <td>{!! $plan->interest_after_matured !!}</td>
                        <td>{!! $plan->release_deposit !!}</td>
                        <td>{!! $plan->profit !!}</td>
                        <td>{!! $plan->interest_period_type !!}</td>
                        <td>{!! $plan->investment_duration !!}</td>
                         <td>{!! $plan->investment_duration_type !!}</td>
                         <td><a href="{!! guard_url('plan/plan') !!}/{!! $plan->getRouteKey() !!}" class="text-primary" data-toggle="tooltip" data-placement="left" title="Edit" data-action="EDIT" >View</a>
</td>
                         </tr>
                         @empty
                         <tr>
							 <td colspan="8">
                    <div class="plan-gadget-box">
                     <p>No Plan</p>
                    </div>
                    </td>
                    </tr>
                    @endif
                    </tbody>
                </table>
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
            'searchable': true,
            'orderable': true,
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
            {data :'id'},
            {data :'name'},
            {data :'min_investment'},
            {data :'max_investment'},
            {data :'interest_after_matured'},
            {data :'release_deposit'},
            {data :'profit'},
            {data :'interest_period_type'},
            {data :'investment_duration'},
            {data :'investment_duration_type'},
            {data :'action'}
        ],
        "pageLength": 25
    });

    $('#plan-plan-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#plan-plan-list').DataTable().row( this ).data();
        $('#plan-plan-entry').load('{!!guard_url('plan/plan')!!}' + '/' + d.id);
    });

    $('#plan-plan-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#plan-plan-check-all").on( 'change', function (e) {
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
