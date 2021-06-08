@component('mail::message')
<?php 
$dt=getMailTemplate('forgot_password');
$find=['{PASS_KEY_URL}','{SITE_NAME}','localhost/client'];
$replace=[$actionUrl,config('app.name'),'client'];
echo str_replace($find, $replace,$dt->body);
?>
@endcomponent
