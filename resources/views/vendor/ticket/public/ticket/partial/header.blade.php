<section class="inner-page-title header">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h1>{!! trans('ticket::ticket.name') !!}</h1>
        <form action="{{guard_url('tickets')}}" class="search search-full">
            <input type="text" class="form-control" name="search" value="" placeholder="Search existing ticket subject">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </div>
    </div>
  </div>
</section>
