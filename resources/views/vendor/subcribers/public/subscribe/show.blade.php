            @include('subcribers::public.subscribe.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('subcribers::public.subscribe.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($subscribe->defaultImage('images' , 'xl'))!!}" alt="{{$subscribe->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="sub_id">
                    {!! trans('subcribers::subscribe.label.sub_id') !!}
                </label><br />
                    {!! $subscribe['sub_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="sub_email">
                    {!! trans('subcribers::subscribe.label.sub_email') !!}
                </label><br />
                    {!! $subscribe['sub_email'] !!}
            </div>
        </div>
    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



