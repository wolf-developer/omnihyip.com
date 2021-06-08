<div class="btn-group company_setting-company_setting">
    <button class="btn btn-xs btn-danger btn-search" type="button">
        <i aria-hidden="true" class="fa fa-search">
        </i>
        <span class="hidden-sm hidden-xs"> Search</span>
    </button>
    <button aria-expanded="false" class="btn btn-xs btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
        <span class="caret">
        </span>
        <span class="sr-only">
            Toggle Dropdown
        </span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li>
            <a class="btn-search" style="cursor:pointer;">
                <i aria-hidden="true" class="fa fa-fw fa-filter">
                </i>
                Show filters
            </a>
        </li>
        <li>
            <a class="btn-reset-filter" style="cursor:pointer;">
                <i class="fa fa-fw fa-ban text-danger">
                </i>
                Clear filters
            </a>
        </li>
        <li class="divider">
        </li>
        <li>
            <a class="btn-save" style="cursor:pointer;">
                <i aria-hidden="true" class="fa fa-fw fa-floppy-o">
                </i>
                Save search
            </a>
        </li>
        <li>
            <a class="btn-open" style="cursor:pointer;">
                <i aria-hidden="true" class="fa fa-fw fa-folder-open-o">
                </i>
                Saved searches
            </a>
        </li>
    </ul>
</div>

<div class="modal fade" id="modal-search">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #dd4b39; color: #fff;">
              <button type="button" class="close" data-dismiss="modal" aaria-hidden="true">&times;</button>
              <h4 class="modal-title">Search</h4>
            </div>
              {!!Form::horizontal_open()
              ->id('form-search')
              ->method('POST')
              ->action(guard_url('settings/settings'))!!}
                <div class="modal-body has-form clearfix">
                    <div class="modal-form">
<div class="container-fluid">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[company_name]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.company_name')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[company_name]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[company_legal_name]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.company_legal_name')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[company_legal_name]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[company_start]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.company_start')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[company_start]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[contact_person]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.contact_person')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[contact_person]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[company_address]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.company_address')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[company_address]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[company_country]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.company_country')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[company_country]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[company_city]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.company_city')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[company_city]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[company_zip_code]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.company_zip_code')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[company_zip_code]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[company_phone]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.company_phone')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[company_phone]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[company_email]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.company_email')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[company_email]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[company_domain]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.company_domain')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[company_domain]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[facebook_link]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.facebook_link')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[facebook_link]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[twitter_link]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.twitter_link')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[twitter_link]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[instagram_link]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.instagram_link')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[instagram_link]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[seo_title]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.seo_title')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[seo_title]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[meta_data]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.meta_data')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[meta_data]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[google_analytic_code]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.google_analytic_code')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[google_analytic_code]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[google_webmaster_tool_code]" class="col-sm-2 control-label">
                                        {!! trans('company_setting::company_setting.label.google_webmaster_tool_code')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[google_webmaster_tool_code]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12 col-lg-12">
                        <button aria-label="Close" class="btn pull-right btn-danger" data-dismiss="modal" type="button">
                            <i class="fa fa-times-circle">
                            </i>
                            Close
                        </button>
                        <button class="btn btn-success pull-right " id="btn-apply-search" name="new" style="margin-right:1%" type="button">
                            <i class="fa fa-check-circle">
                            </i>
                            Search
                        </button>
                    </div>
                </div>
              {!!Form::close()!!}
        </div>
    </div>
</div>


<div class="modal fade" id="modal-open">
  <div class="modal-dialog">
    <div class="modal-content" style="max-width:400px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Saved</h4>
      </div>
      <div class="modal-body" style="height:210px; overflow-y: auto;">
        
        <div id="saved-list">
          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger"  name="Closerep" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close </button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
$(document).ready(function(){

    $(".company_setting-company_setting .btn-open").click(function(){
        toastr.info('This feature will be enabled soon.', 'Coming soon');
        return false;
        $('#open-list').load("{!!guard_url('/settings/setting/search/company_setting.company_setting.search')!!}");
        $('#modal-open').modal("show");
    });

   $(".company_setting-company_setting .btn-search").click(function(){
      $('#modal-search').modal("show");
    });
   
    $('.company_setting-company_setting .btn-save').click(function(e){
        toastr.info('This feature will be enabled soon.', 'Coming soon');
        return false;
        var search = prompt("Please enter name for your search");
        if (search == null) {
            toastr.error('Please enter valid name.', 'Error');
            return false;
        }
        var formData = new FormData();
        formData.append('value', $("#form-search").serialize());
        formData.append('name', search);
        formData.append('key', 'company_setting.company_setting.search');
        formData.append('package', 'Page');
        formData.append('module', 'Page');

        $.ajax({
            url : "{!!guard_url('/settings/setting')!!}",
            type: "POST",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success:function(data, textStatus, jqXHR)
            {
                toastr.success('Search saved successfully.', 'Success');
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                toastr.error('An error occurred while saving.', 'Error');
            }
        });

        e.preventDefault();
    });

    $('#btn-apply-search').click( function() {
        oSearch = {};
        $('#form-search input,#form-search select').each( function () {
          key = $(this).attr('name');
          val = $(this).val();
          oSearch[key] = val;
        });
        oTable.api().draw();
        $('#company_setting-company_setting-list .btn-reset-filter').css('display', '');
        $('#modal-search').modal("hide");
        
      });
    
    $(".btn-reset-filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        oSearch = {};
        $('#form-search input,#form-search select').each( function () {
          key = $(this).attr('name');
          val = $(this).val();
          oSearch[key] = val;
        });
        oTable.api().draw();
        $('#company_setting-company_setting-list .btn-reset-filter').css('display', 'none');

    });

});
</script>