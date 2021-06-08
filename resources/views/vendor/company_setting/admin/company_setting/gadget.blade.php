@forelse($company_setting as $key => $val)
<div class="company_setting-gadget-box">
    <p>{!!@$val->name!!}</p>
    <p class="text-muted"><small><i class="ion ion-android-person"></i> {!!@$val->user->name!!} at {!! format_date($val->created_at)!!}</small></p>
</div>
@empty
<div class="company_setting-gadget-box">
    <p>No CompanySetting</p>
</div>
@endif