            <div class='row'>
                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="image" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('banners::banner.label.image') }}
                        </label>
                        
                          @if ($mode == 'create')
            <div class="tab-pane row" id="image">
                <div class="form-group">
                    
                    <div class='col-lg-12 '>
						 
                        <div class='col-lg-7 col-sm-12'>
                        {!! $banner->files('image')
                        ->editor()!!}
                        </div>
                        {!! $banner->files('image')
                        ->url($banner->getUploadUrl('image'))
                        ->uploader()!!}
                    </div>                            
                </div>
            </div>
            @elseif ($mode == 'edit')
            <div class="tab-pane row" id="image">
                <div class="form-group">
                    <div class='col-lg-12'>
                        {!! $banner->files('image')
                        ->url($banner->getUploadUrl('image'))
                        ->uploader()!!}
                    </div>

                </div>
            </div>
            @elseif ($mode == 'show')
            <div class="tab-pane disabled row" id="company_logo">
                <div class='col-md-6'>
                    {!! $banner->files('image') !!}
                </div>
            </div>
            @endif
                       
                    </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('status')
                    -> options(trans('banners::banner.options.status'))
                    -> label(trans('banners::banner.label.status'))
                    -> required()
                    -> placeholder(trans('banners::banner.placeholder.status'))!!}
               </div>
            </div>
