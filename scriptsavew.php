<?php

/* Get Values From Submitted Form */
$fname = $_REQUEST['file'];
$fversion = $_REQUEST['version'];

/* Create URL for File */
$fdir = 'sfiles/';
$fsav = $fdir . $fname . "v" . $fversion . ".xml";
$fh = fopen($fsav, 'w') or die("can't open file");


/* Write XML */

/* Start XML */
$stringData = ('<?xml version="1.0" ?>
<doc>');
fwrite($fh, $stringData);

/* Close HTML Document */
fclose($fh);

?>
