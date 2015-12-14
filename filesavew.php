<?php

/* Get Values From Submitted Form */
$fname = $_REQUEST['file'];
$fversion = $_REQUEST['version'];

/* Create URL for File */
$fdir = 'shtml/';
$fsav = $fdir . $fname . "v" . $fversion . ".html";
$fh = fopen($fsav, 'w') or die("can't open file");


/* Write HTML */

/* Start HTML */
$stringData = ('<html>
<head>
</head>
<body>');
fwrite($fh, $stringData);

/* Close HTML Document */
fclose($fh);

?>
