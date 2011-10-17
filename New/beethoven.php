<?php
#Include the settings
require_once 'settings.php';
#include the file containing the function to detect the browser
require_once 'cookie_management.php';

# part of browser detection
$is_mobile = cookie_management();

echo 'is mobile? '.$is_mobile;

?>