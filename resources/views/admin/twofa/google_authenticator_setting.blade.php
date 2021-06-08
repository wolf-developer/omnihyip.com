<div id="page-wrapper" style="min-height: 1096px;">
    <!-- Content Header (Page header) -->
     <section class="content-header">
   <h3 class="title1">
        <i class="fa fa-user "></i> Google Authenticator setting
        </h3>
         </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
                       
            <div id="show-profile">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                     
         <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="{!!url('admin')!!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Two FA</li>
        </ol>
        </section>
   
                             @include('notifications')
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab" aria-expanded="false">Two FA</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                


                                    {!!Form::vertical_open()
                                    ->id('form-update-profile')
                                    ->method('POST')
                                    ->action('admin/update_gtwofa')
                                    ->class('update-profile')!!}

<div class="row">
                            <div class="col-sm-12">
                                <div class="form-group label-floating row">
                                   <div class="col-sm-6">
                                    <label class="control-label pushlrft" for="address">
                                    Google Authenticator Enable
                                    </label>
                                    <input class="changestatus" type='radio' {{(user()->gtwofa==1)?'checked="checked"':''}} value="1" name="gtwofa">
                                    </div>
                                    <div class="col-sm-6">
                                    <label class="control-label col-lg-offset-1 pushlrft" for="address">
                                    Google Authenticator Disable
                                    </label>
                                    <input class="changestatus" type='radio' {{(user()->gtwofa==0)?'checked="checked"':''}} value="0" name="gtwofa">
                                      </div>

                                    @if(user()->gtwofa==1)
                                    <div style="display: inline;padding-left: 50px;"><a href="#" onclick="showModal()">Scan QR code</a></div>
                                    @endif
                                </div> 
                                <div class="form-group col-sm-4">
              <label for="usrname" class="entac"><span class="glyphicon glyphicon-lock"></span> Enter access key</label>
              <input  type="password" required="yes" class="form-control" name='keyf' id="keyf" placeholder="Enter access key">
            </div>
                            </div> 
                        </div>
                       <div class="new_div">  
                        <button type="submit" class="btn btn-primary" id="btn-update-profile">Update</button>
                                    <button type="reset" class="btn btn-default btn-close">Reset</button>
                                    </div>

                                    {!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:#fff;"><span class="glyphicon glyphicon-lock"></span> Qr Code</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="qrcode">
            <div class="form-group">
              <label for="usrname" style="color:#fff;"><span class="glyphicon glyphicon-lock"></span> Enter access key</label>
              <input type="password" class="form-control" name='key' id="key" placeholder="Enter access key">
            </div>
            
            <button type="submit" class="btn btn-default btn-success aceesCode btn-block"style="margin-top: 18px;"><span class="glyphicon glyphicon-off"></span> Access Qrcode</button>
            {{ csrf_field() }}
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          
        </div>
      </div>
    </div>
  </div> 
</div>

<script>
    function showModal(){
        $('#myModal').modal('show');
    }
    
</script>
<style>.aceesCode:hover {
    background: #009886 !important;
    border: 1px solid #009886 !important;
}</style>