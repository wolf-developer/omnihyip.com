
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('payment_setting::payment_setting.name') !!} <small> {!! trans('app.manage') !!} {!! trans('payment_setting::payment_setting.names') !!}</small>
        </h1>
        
    </section>
    <!-- Main content -->
    
   

    <section id="tabs" class="project-tab">
         
                    <div class="col-md-12">
                        <nav>
                            <ul class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                               <li class="active">   <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Deposit Payment</a></li>
                                <li class="">  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Withdrawal Payment</a></li>
                            </ul>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active in" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <section class="content">
        <div id='payment_setting-payment_setting-entry'>
       
        <div class="nav-tabs-custom">
<section class="content-header">
       
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('payment_setting::payment_setting.names') !!}</li>
        </ol>
    </section>
            <div class="tab-content">
                <table class="table table-striped data-table">
                    <thead class="list_head">
                        <tr>
                            <th data-field="payment_method">Payment Method</th>
                            <th data-field="status">Inactive</th>  
                            <th data-field="status">Active</th>  
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($payment_method as $payment_metho)
                        <tr>
                            
                            <td>{{$payment_metho->payment_method}}</td>
                            <td><input data-id='{{$payment_metho->id}}' class="changestatus" type='radio' {{($payment_metho->deposit_status==0)?'checked="checked"':''}} value="0" name="payment_method{{$payment_metho->id}}">
                            
                            </td>
                            <td><input data-id='{{$payment_metho->id}}' class="changestatus" {{($payment_metho->deposit_status==1)?'checked="checked"':''}} type='radio' value="1" name="payment_method{{$payment_metho->id}}">                            
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
         </div>
        </div>
    </section>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                               <section class="content">
        <div id='payment_setting-payment_setting-entry'>
        </div>
        <div class="nav-tabs-custom">
                  <section class="content-header">
       
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('payment_setting::payment_setting.names') !!}</li>
        </ol>
    </section>
            <div class="tab-content">
                <table class="table table-striped data-table">
                    <thead class="list_head">
                        <tr>
                            
                            <th data-field="payment_method">Payment Method</th>
                            <th data-field="status">Inactive</th>  
                            <th data-field="status">Active</th>  
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($payment_method as $wpayment_metho)
                        <tr>
                            <td>{{$wpayment_metho->payment_method}}</td>
                            <td><input data-type='{{$wpayment_metho->id}}' class="widthrawchangestatus" type='radio' {{($wpayment_metho->widthrawal_status==0)?'checked="checked"':''}} value="0" name="wpayment_method{{$wpayment_metho->id}}">
                            
                            </td>
                            <td><input data-type='{{$wpayment_metho->id}}' class="widthrawchangestatus" {{($wpayment_metho->widthrawal_status==1)?'checked="checked"':''}} type='radio' value="1" name="wpayment_method{{$wpayment_metho->id}}">                            
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
        </div>
                            
                        </div>
                    </div>
            
        </section>
    
</div>
<script>
$(document).ready(function(){
    $('.changestatus').click(function(){
        var status=$(this).val();
        var id=$(this).data('id');
    
        $.ajax({
               type:'POST',
               url:'{!!guard_url('payment/method')!!}',
               data:'_token = <?php echo csrf_token() ?>&id='+id+'&deposit_status='+status,
               success:function(data){
                  
               }
        
    });
});
  $('.widthrawchangestatus').click(function(){
        var status=$(this).val();
        var id=$(this).data('type');
        
    
        $.ajax({
               type:'POST',
               url:'{!!guard_url('payment/method')!!}',
               data:'_token = <?php echo csrf_token() ?>&id='+id+'&widthrawal_status='+status,
               success:function(data){
                  
               }
        
    });
});

});
</script>

