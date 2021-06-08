            @include('banners::public.banner.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('banners::public.banner.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($banner->defaultImage('images' , 'xl'))!!}" alt="{{$banner->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="image">
                    {!! trans('banners::banner.label.image') !!}
                </label><br />
                    {!! $banner['image'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('banners::banner.label.status') !!}
                </label><br />
                    {!! $banner['status'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="image" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('banners::banner.label.image') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $banner->files('image')
                            ->url($banner->getUploadUrl('image'))
                            ->mime(config('filer.image_extensions'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                        {!! $banner->files('image')
                        ->editor()!!}
                        </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



