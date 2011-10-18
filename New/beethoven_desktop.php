<?php
#Include the settings
require_once 'settings.php';

# Set the cache control header
header("Cache-Control: max-age=604800");

$html_to_print = '<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/><title>Lyrics of Beethoven\'s Ode to Joy - Lyrics repository</title><link rel="stylesheet" type="text/css" href="'.$path_parts['dirname'].'/base.php"/>'.
				'<link rel="stylesheet" type="text/css" href="'.$path_parts['dirname'].'/enhanced_600_800.php"/><link rel="stylesheet" type="text/css" href="'.$path_parts['dirname'].'/enhanced_800_plus.php" media="only all and (min-width: 801px)" /><!--[if lt IE 9 & !IEMobile]><link rel="stylesheet" type="text/css" href="'.$path_parts['dirname'].'/enhanced_600_800.php"/><![endif]-->'.
				'<link rel="canonical" href="http://'.$_SERVER['SERVER_NAME'].$path_parts['dirname'].'/beethoven.php"/></head><body><div id="header"><h1>Lyrics of Beethoven\'s Ode to Joy</h1></div><div id="container"><div id="sidebar1" class="sidebar"><ul><li><a href="#">Lyric Repository\'s Home</a></li><li><a href="#">Site Map</a></li></ul></div><div id="breadcrumbs" class="breadcrumbs">	Home -&gt; Beethoven\'s Ode to Joy</div><div id="centralpart"><div id="content1" class="content">'.
				'<img width="240" height="300" alt="Beethoven\'s portrait" src="beethoven_240px.gif" class="big-images"/>'.
				'<p>Beethoven\'s last symphony includes part of the <cite>Ode to Joy</cite> poem\'s written by Friedrich Schiller.</p>'.
				'<blockquote><p>Freude, schöner Götterfunken<br/>Tochter aus Elysium,<br/>Wir betreten feuertrunken,<br/>Himmlische, dein Heiligtum!<br/>Deine Zauber binden wieder<br/>Was die Mode streng geteilt;<br/>Alle Menschen werden Brüder,<br/>Wo dein sanfter Flügel weilt.</p>'.
				'<p>Wem der große Wurf gelungen,<br/>Eines Freundes Freund zu sein;<br/>Wer ein holdes Weib errungen,<br/>Mische seinen Jubel ein!<br/>Ja, wer auch nur eine Seele<br/>Sein nennt auf dem Erdenrund!<br/>Und wer\'s nie gekonnt, der stehle<br/>Weinend sich aus diesem Bund!</p>'.
				'<p>Freude trinken alle Wesen<br/>An den Brüsten der Natur;<br/>Alle Guten, alle Bösen<br/>Folgen ihrer Rosenspur.<br/>Küsse gab sie uns und Reben,<br/>Einen Freund, geprüft im Tod;<br/>Wollust ward dem Wurm gegeben,<br/>und der Cherub steht vor Gott.</p>'.
				'<p>Froh,<br/>wie seine Sonnen fliegen<br/>Durch des Himmels prächt\'gen Plan,<br/>Laufet, Brüder, eure Bahn,<br/>Freudig, wie ein Held zum Siegen.</p>'.
				'<p>Seid umschlungen, Millionen!<br/>Diesen Kuß der ganzen Welt!<br/>Brüder, über\'m Sternenzelt<br/>Muß ein lieber Vater wohnen.<br/>Ihr stürzt nieder, Millionen?<br/>Ahnest du den Schöpfer, Welt?<br/>Such\' ihn über\'m Sternenzelt!<br/>Über Sternen muß er wohnen.</p>'.
				'</blockquote></div>'.
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
				'<ul><li><a href="#">Other lyrics from this artist</a></li><li><a href="'.$path_parts['dirname'].'/beethovenlife_desktop.php">More information on this artist</a></li><li><a href="#">Other lyrics from this period</a></li><li><a href="#">Contact Us</a></li><li><a href="#">Copyright and licenses</a></li><li><a href="#">Privacy policy</a></li><li>'.
				'<a href="'.$path_parts['dirname'].'/beethoven.php?vpa=m">Visit mobile version of this website</a>'.
				'</li></ul></div></div><div id="footer"><p>This page was built for demonstration purposes.</p></div></body></html>';

echo $html_to_print;
?>