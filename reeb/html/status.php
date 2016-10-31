<?php
	header('Access-Control-Allow-Origin: *');  
	$o = shell_exec("sudo python /var/www/html/check.py ".$_GET['one']);
	print_r($o);
?>
