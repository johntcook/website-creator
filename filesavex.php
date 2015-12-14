<?php

/* Get Values From Submitted Form */
$fname = $_REQUEST['file'];
$fversion = $_REQUEST['version'];

/* Create URL for File */
$fdir = 'shtml/';
$fsav = $fdir . $fname . "v" . $fversion . ".html";
$fh = fopen($fsav, 'a') or die("can't open file");


/* Write XML */

/* Start XML */
$stringData = ('
</body>
</html>');
fwrite($fh, $stringData);

/* Close HTML Document */
fclose($fh);

?>