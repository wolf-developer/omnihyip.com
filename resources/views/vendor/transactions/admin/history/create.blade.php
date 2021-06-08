<!-- Content Wrapper. Contains page content -->
<div id="page-wrapper" style="min-height: 256px;">
   
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="title1">
            <i class="fa fa-file-text-o"></i> Bonus 
        </h3>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">Bonus</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div id='transactions-history-entry'>
            <div class="nav-tabs-custom">
                <div class="table-responsive">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs primary">
                    <li class="active"><a href="#details" data-toggle="tab">SEND BONUS</a></li>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-default btn-sm" id="btnSave" data-action='CREATE' data-form='#transactions-history-create'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                    </div>
                </ul>
                <div class="tab-content clearfix">
                    {!!Form::vertical_open()
                    ->id('transactions-history-create')
                    ->method('POST')
                    ->files('true')
                    ->action(guard_url('transactions/history'))!!}
                    @include('notifications')
                    <div class="tab-pane active" id="details">
                        <div class="tab-pan-title">Enter Bonus</div>
                        <p class="bonus_note">*Note: If you do not select any user then bonus will send to all users.</p>
                        @include('transactions::admin.history.partial.entry', ['mode' => 'create'])
                    </div>
                    {!! Form::close() !!}
                </div>
                <div>
            </div>
        </div>
    </section>        
</div>
<style>
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
    background-color: #17446D;
}
</style>
<script>
$(function() { $('#btnSave').on('click',function() { $(this).val('Please wait ...') .attr('disabled','disabled'); $('#transactions-history-create').submit(); }); }); 

</script>
<script>
$('document').ready(function(){
    $(".btn").one("click",function (e) {
        e.preventDefault();
        var amount = $("#amount").val();
        var desc = $("#description").val();
       
        if(amount == '' || amount < 0){
            
            alert("please enter valid amount");
            $('#amount').focus();
            return false;
        }
        if(desc == ''){
           alert("please enter description");
            $('#description').focus();
       }
        
        setTimeout( function () { 
        $("form").trigger("reset");
    }, 3);
    });
    $("amount").val("");
    });
</script>