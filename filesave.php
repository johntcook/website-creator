<?php

/* Get Values From Submitted Form */
$fname = $_REQUEST['file'];
$fversion = $_REQUEST['version'];
$fwidth = $_REQUEST['width'];
$fheight = $_REQUEST['height'];
$fposx = $_REQUEST['posx'];
$fposy = $_REQUEST['posy'];
$fhtml = $_REQUEST['html'];

/* Create URL for File */
$fdir = 'shtml/';
$fsav = $fdir . $fname . "v" . $fversion . ".html";
$fh = fopen($fsav, 'a') or die("can't open file");

/* Write XML */

/* Start XML */
$stringData = ('
<div style="width:');
fwrite($fh, $stringData);

$stringData = $fwidth;
fwrite($fh, $stringData);

$stringData = ('; height:');
fwrite($fh, $stringData);

$stringData = $fheight;
fwrite($fh, $stringData);

$stringData = ('; position:absolute; left:');
fwrite($fh, $stringData);

$stringData = $fposx;
fwrite($fh, $stringData);

$stringData = ('; top:');
fwrite($fh, $stringData);

$stringData = $fposy;
fwrite($fh, $stringData);

$stringData = (';">');
fwrite($fh, $stringData);

$stringData = $fhtml;
fwrite($fh, $stringData);

$stringData = ('</div>
');
fwrite($fh, $stringData);

/* Close HTML Document */
fclose($fh);

?>