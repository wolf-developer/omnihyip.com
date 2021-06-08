<!-- Content Wrapper. Contains page content -->

<div id="page-wrapper" style="min-height: 426px;">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="title1">
            <i class="fa fa-file-text-o"></i> <!--{!! trans('subcribers::subscribe.name') !!}--> <small> {!! trans('app.manage') !!} {!! trans('subcribers::subscribe.names') !!}</small>
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('subcribers::subscribe.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        @include('notifications')
    <div id='subcribers-subscribe-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('subcribers/subscribe')!!}">{!! trans('subcribers::subscribe.names') !!}</a></li>
                    
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('subcribers/subscribe/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('subcribers::admin.subscribe.partial.actions')
                    -->
                    @include('subcribers::admin.subscribe.partial.filter')                    
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
				<div class="table-responsive">
                    <table id="subcribers-subscribe-list" class="table table table-bordered data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="subcribers-subscribe-check-all"></th>
                             <th data-field="sub_email">Users {!! trans('subcribers::subscribe.label.sub_email')!!}</th>
                    </thead>
                </table>
            </div>
            </div>
        </div>
        <button type="button" class="btn btn-default" id="formButton"  data-toggle="modal" data-target="#myModal">Subscriber Send mail!</button>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" onclick="CloseModalPopup();" aria-label="Close" data-dismiss="modal">
            <span aria-hidden="true">×</span>
            </button>
          
        </div>
        
      <div class="modal-body">
    
        <div class="form" id="">
						<div class="contactLeft">
							<div class="mb30" id="success"></div>

							{!!Form::vertical_open()->id('send-message')->method('POST')->class('contt')->action(guard_url('subcribers/send_data'))!!}
							
									<div class="row">   
										<div class="col-sm-12 cpp tags">   
											<div class="form-group">
												<label class="control-label">Subject</label> 
												{!!Form::text('subject')->class('form-control person')->required()->placeholder('Subject')->required()->raw()!!}               
											</div>											
										</div>	
										
									</div>
									<div class="row"> 
										<div class="col-sm-12"> 
											<div class="form-group">
												<label class="control-label">Message Body</label>   
												 {!!Form::textarea('message')->class('form-control')->required()->placeholder('Message')->required()->rows(5)->raw()!!}         
												
											</div>
										</div>	
									</div>	
								</div>	
								<div class="contact-button">
									<button class="btn btnTheme contact-btn" id="envoyer" type="submit">Submit</button> 
								</div>	
								<div class="cls">
								    
								    <button type="button" class="close btn btn-default pull-right btt" data-dismiss="modal">Close</button></div>
                     {!!Form::close()!!}
                     
                    
						</div>
					

      </div>
     
    </div>

  </div>
</div>					
			
		  </section>
		  </div>


<script>
$(document).ready(function(){

    $('.cpp').on("cut copy paste",function(e) {
        e.preventDefault();
        alert("You cannot copy and paste into this text field.");
    });

    $('.tags').on("keydown", function(e){
        if (e.shiftKey && (e.which == 188 || e.which == 190)) {
        e.preventDefault();
        alert("You cannot add tags in the field.");
        }
    });
});
</script>

<script>

//form_data.append('checkboxes', ch_data);
 
  $(document).ready(function(){
      
      
      
      
      
	 $('#formButton').click(function(){
		 var j = 0;
		  $('.ccc').each(function(i,v){		
		if ($(v).is(':checked')) {
				j++;
			  $('#send-message').append('<input type="hidden" class="sxcsc" name="emails[]" value="'+$(v).val()+'">');			 		  
		  }
		 
		 });
		 			  
		 if(j==0){
			  
			  alert("Please choose atleast one email address");
			  return false;
			  
			  }		 

	 });
	 
	 
	 $("#subject, #message").on('keypress', function (event) {
                var regex = new RegExp("^[a-zA-Z0-9_ ]*$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                    event.preventDefault();
                    alert("Please enter valid data");
                    return false;
                }
            });

	  
		
   });
</script>
<script type="text/javascript">

var oTable;
var oSearch;
$(document).ready(function(){
    //app.load('#subcribers-subscribe-entry', '{!!guard_url('subcribers/subscribe/0')!!}');
    oTable = $('#subcribers-subscribe-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, full, meta){					
                return  '<input type="checkbox" name="sub_email[]" class="ccc" id="sub_email" value="' + full.sub_email + '">';
                        
            }
        }], 
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('subcribers/subscribe') !!}',
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
             {data :'sub_email'}
            
        ],
        "pageLength": 25
    });

    


    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#subcribers-subscribe-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#subcribers-subscribe-list tbody').on('click', 'td.details-control', function (e) {
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
   $("#subcribers-subscribe-check-all").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    
    

});

</script>



<script>
$(document).ready(function(){
  $(".close").click(function(){
  $('#myModal').removeClass('in')
  });
});
</script>
