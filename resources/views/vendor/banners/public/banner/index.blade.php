
<section class="grid inner-grid">
    <div class="row">
        <div class="col-md-12">
            <div class="main-area parent-border list-item">

                <div class="tickets_headings">
                    <div class="left_t_content">{!! trans('banners::banner.name') !!}</div>

                </div>

                <div class="card">
                    <div class="card-block">
                        <table id="plan-plan-list" class="table table-striped data-table">
                            <thead class="list_head">
                                <tr>
                                    <th width="50" data-field="image">{!! trans('banners::banner.label.image')!!}</th>
                                    <th width="50" data-field="action">{!! trans('banners::banner.label.code')!!}</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($banners as $banner)
                                
                                <tr>
                                    <td><img src="{!!asset('storage/uploads/'.$banner->image[0]['path']) !!}" alt="banner" class="img-responsive"></td>
                                    <td><textarea readonly="true" id="banner_{!! $banner->id!!}" style="margin-top: 0px;margin-bottom: 0px;height: 150px;width: 100%;"><a href="{{trans_url('client/register/'.user()->referral_code)}}"><img src="{!!asset('storage/uploads/'.$banner->image[0]['path']) !!}" alt="banner" class="img-responsive"></a></textarea>
                                                    <br>
                                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="copyText({!! $banner -> id !!})" style="width: auto;margin: 10px 0 0;padding: 10px 35px;float: right;">Copy</a></td>
                                                    
                                                   
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                           
                        </div>
                    </div>
            </section>
<style>
.table {
    width: 100%!important;
}
</style>
<script>
    $(document).ready(function () {
    $('#plan-plan-list').DataTable();
    });</script> 
<script>
    function copyText(id) {
    var copyText = document.getElementById('banner_' + id);
    copyText.select();
    document.execCommand("copy");
    alert("Copied the text" + copyText.value);
    }
</script>
