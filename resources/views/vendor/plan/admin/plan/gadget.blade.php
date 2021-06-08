@forelse($plan as $key => $val)
<div class="plan-gadget-box">
    <p>{!!@$val->name!!}</p>
    <p class="text-muted"><small><i class="ion ion-android-person"></i> {!!@$val->user->name!!} at {!! format_date($val->created_at)!!}</small></p>
</div>
@empty
<div class="plan-gadget-box">
    <p>No Plan</p>
</div>
@endif