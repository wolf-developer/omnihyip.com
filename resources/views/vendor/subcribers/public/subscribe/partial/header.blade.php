<section class="inner-page-title header">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h1>{!! trans('subcribers::subscribe.name') !!}</h1>
        <form action="{{trans_url('subscribes')}}" class="search search-full">
            <input type="text" class="form-control" name="search[q]" value="" placeholder="Search existing subscribe">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </div>
    </div>
  </div>
</section>