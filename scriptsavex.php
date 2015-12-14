<?php

/* Get Values From Submitted Form */

$fname = $_REQUEST['file'];

$fversion = $_REQUEST['version'];



/* Create URL for File */

$fdir = 'sfiles/';

$fsav = $fdir . $fname . "v" . $fversion . ".xml";

$fh = fopen($fsav, 'a') or die("can't open file");




/* Write XML */


/* Start XML */


$stringData = ('
</doc>');

fwrite($fh, $stringData);



/* Close HTML Document */


fclose($fh);




?>