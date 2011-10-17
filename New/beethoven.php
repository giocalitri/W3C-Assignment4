<?php
#Include the settings
require_once 'settings.php';

###############################################################
# part of browser detection

#I check if the cookie is set
#if so I get the value
if (isset($_COOKIE['m']))
{
	$is_mobile = $_COOKIE['m'];
	echo 'cookie already set to '.$is_mobile;
}
#otherwise I try to detect if the browser is a mobile
#and in any case I'll set the cookie for the next time
else 
{
	#I try to detect the browser
	include("Mobile_Detect.php");
	$detect = new Mobile_Detect();
	if ($detect->isMobile()) 
	{
		#the request is from a mobile
		$is_mobile = 1;
		#I set the cookie for 1 year
		setcookie('m', $is_mobile, time()+60*60*24*365, '/', $DOMAIN);
		echo 'cookie set to mobile (detected)';
	}
	else
	{
		#the request is from a desktop
		$is_mobile = 0;
		#I set the cookie for 1 year
		setcookie('m', $is_mobile, time()+60*60*24*365, '/', $DOMAIN);
		echo 'cookie set to desktop (detected)';
	}
}



# end of part of browser detection
###############################################################

?>