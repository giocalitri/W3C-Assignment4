<?php
#Include the settings
require_once 'settings.php';
#include the file containing the function to detect the browser
require_once 'cookie_management.php';

# part of browser detection
$is_mobile = cookie_management();

# Set the cache control header
header("Vary: User-Agent, Accept");

if ($is_mobile == 0)
{
	header("Location: http://".$_SERVER['SERVER_NAME'].$path_parts['dirname']."/beethoven_desktop.php");
} 
else 
{
	header("Location: http://".$_SERVER['SERVER_NAME'].$path_parts['dirname']."/beethoven_mobile.php"); 
}

?>