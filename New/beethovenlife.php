<?php
#Include the settings
require_once 'settings.php';
#include the file containing the function to detect the browser
require_once 'cookie_management.php';

# part of browser detection
$is_mobile = cookie_management();

# Set the cache control header
header("Cache-Control: max-age=604800");
header("Vary: User-Agent, Accept");

$html_to_print = '<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/><title>Lyrics of Beethoven\'s Ode to Joy - Lyrics repository</title><link rel="stylesheet" type="text/css" href="'.$path_parts['dirname'].'/base.php"/>';
if ($is_mobile == 0)
{
	$html_to_print .= '<link rel="stylesheet" type="text/css" href="'.$path_parts['dirname'].'/enhanced_600_800.php"/><link rel="stylesheet" type="text/css" href="'.$path_parts['dirname'].'/enhanced_800_plus.php" media="only all and (min-width: 801px)" /><!--[if lt IE 9 & !IEMobile]><link rel="stylesheet" type="text/css" href="'.$path_parts['dirname'].'/enhanced_600_800.php"/><![endif]-->';
}
$html_to_print .= '<link rel="canonical" href="http://'.$_SERVER['SERVER_NAME'].'/beethovenlife.php"/></head><body><div id="header"><h1>Lyrics of Beethoven\'s Ode to Joy</h1></div><div id="container"><div id="sidebar1" class="sidebar"><ul><li><a href="#">Lyric Repository\'s Home</a></li><li><a href="#">Site Map</a></li></ul></div><div id="breadcrumbs" class="breadcrumbs">	Home -&gt; Beethoven\'s Info</div><div id="centralpart"><div id="content1" class="content">';
if ($is_mobile == 0)
{
	$html_to_print .= '<img width="240" height="300" alt="Beethoven\'s portrait" src="beethoven_240px.gif" class="big-images"/>';
}
else
{
	$html_to_print .= '<img width="120" height="150" alt="Beethoven\'s portrait" src="beethoven_120px.gif" class="big-images"/>';
}
				
$html_to_print .= '<p>Ludwig van Beethoven (baptized 17 December 1770 - 26 March 1827) was a German composer and pianist.<br/>A crucial figure in the transition between the Classical and Romantic eras in Western art music, Beethoven is often cited as the greatest composer who ever lived.<br/>Born in Bonn, then the capital of the Electorate of Cologne and part of the Holy Roman Empire, Beethoven moved to Vienna in his early 20s, studying with Joseph Haydn and quickly gaining a reputation as a virtuoso pianist.<br/>His hearing began to deteriorate in the late 1790s, yet he continued to compose, conduct, and perform, even after becoming completely deaf.</p></div>'.
				'<div id="content2" class="content">'.
				'<h2>Beethoven\'s symphonies</h2>'.
				'<dl class="symphonies-list">'.
				'<dt><img width="15" height="15" alt="[Music Symbol]" src="music.gif" /> Symphony 1</dt><dd>Op. 21</dd><dd>Tone: C Major</dd><dd>Year: 1800</dd>'.
				'<dt><img width="15" height="15" alt="[Music Symbol]" src="music.gif" /> Symphony 2</dt><dd>Op. 36</dd><dd>Tone: D Major</dd><dd>Year: 1802</dd>'.
				'<dt><img width="15" height="15" alt="[Music Symbol]" src="music.gif" /> Symphony 3, "Eroica"</dt><dd>Op. 55</dd><dd>Tone: E flat Major</dd><dd>Year: 1804</dd>'.
				'<dt><img width="15" height="15" alt="[Music Symbol]" src="music.gif" /> Symphony 4</dt><dd>Op. 60</dd><dd>Tone: B flat Major</dd><dd>Year: 1806</dd>'.
				'<dt><img width="15" height="15" alt="[Music Symbol]" src="music.gif" /> Symphony 5</dt><dd>Op. 67</dd><dd>Tone: C Minor</dd><dd>Year: 1808</dd>'.
				'<dt><img width="15" height="15" alt="[Music Symbol]" src="music.gif" /> Symphony 6, "Pastorale"</dt><dd>Op. 68</dd><dd>Tone: F Major</dd><dd>Year: 1808</dd>'.
				'<dt><img width="15" height="15" alt="[Music Symbol]" src="music.gif" /> Symphony 7</dt><dd>Op. 92</dd><dd>Tone: A Major</dd><dd>Year: 1812</dd>'.
				'<dt><img width="15" height="15" alt="[Music Symbol]" src="music.gif" /> Symphony 8</dt><dd>Op. 93</dd><dd>Tone: F Major</dd><dd>Year: 1813</dd>'.
				'<dt><img width="15" height="15" alt="[Music Symbol]" src="music.gif" /> Symphony 9</dt><dd>Op. 125</dd><dd>Tone: D Minor</dd><dd>Year: 1824</dd>'.
				'</dl></div></div>'.
				'<div id="sidebar2" class="sidebar">'.
				'<ul><li><a href="#">Other lyrics from this artist</a></li><li><a href="'.$path_parts['dirname'].'/beethoven.php">Beethoven\'s Ode to Joy</a></li><li><a href="#">Other lyrics from this period</a></li><li><a href="#">Contact Us</a></li><li><a href="#">Copyright and licenses</a></li><li><a href="#">Privacy policy</a></li><li>';
if($is_mobile == 0) 
{
	$html_to_print .= '<a href="'.$_SERVER['PHP_SELF'].'?vpa=m">Visit mobile version of this website</a>';
} 
else
{
	$html_to_print .= '<a href="'.$_SERVER['PHP_SELF'].'?vpa=d">Visit desktop version of this website</a>';
}
$html_to_print .= '</li></ul></div></div><div id="footer"><p>This page was built for demonstration purposes.</p></div></body></html>';

echo $html_to_print;
?>