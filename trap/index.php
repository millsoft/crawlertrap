<?php

/*
* crawlertrap
* https://github.com/millsoft/crawlertrap
*/

	$ip = $_SERVER['REMOTE_ADDR'];
	$htaccess_file = "../.htaccess";
	$data = "\nDeny from $ip";
	file_put_contents($htaccess_file, $data, FILE_APPEND);
?>