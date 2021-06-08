<?php
$dt = getMailTemplate('activate_account'); ///withdraw success mail send to admin
$sortcut_code = $find = ['{SITE_NAME}', '{NAME}', '{EMAIL}', '{ACTIVATE_URL}'];
$replace_with = [config('app.name'), $name, $email, guard_url('verify/' . $confirmation_code)];
echo $body = str_replace($sortcut_code, $replace_with, $dt->body);
?>
