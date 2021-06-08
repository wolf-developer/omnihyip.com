<?php
////created by harbhajan
$dir = 'install';
system("rm -rf ".escapeshellarg($dir));
$baseurl = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$baseurl .= "://" . $_SERVER['HTTP_HOST'];
$baseurl .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
header("location:" . $baseurl . $_REQUEST['tp']);
exit;
?>