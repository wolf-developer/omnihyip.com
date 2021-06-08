@forelse($our_service as $key => $val)
<div class="our_service-gadget-box">
    <p>{!!@$val->name!!}</p>
    <p class="text-muted"><small><i class="ion ion-android-person"></i> {!!@$val->user->name!!} at {!! format_date($val->created_at)!!}</small></p>
</div>
@empty
<div class="our_service-gadget-box">
    <p>No OurService</p>
</div>
@endif