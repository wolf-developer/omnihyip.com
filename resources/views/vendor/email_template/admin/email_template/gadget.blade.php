@forelse($email_template as $key => $val)
<div class="email_template-gadget-box">
    <p>{!!@$val->name!!}</p>
    <p class="text-muted"><small><i class="ion ion-android-person"></i> {!!@$val->user->name!!} at {!! format_date($val->created_at)!!}</small></p>
</div>
@empty
<div class="email_template-gadget-box">
    <p>No EmailTemplate</p>
</div>
@endif