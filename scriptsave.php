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
$fdir = 'sfiles/';
$fsav = $fdir . $fname . "v" . $fversion . ".xml";
$fh = fopen($fsav, 'a') or die("can't open file");

/* Write XML */

/* Start XML */
$stringData = ('<section>
<dimensions>
<width>');
fwrite($fh, $stringData);


$stringData = $fwidth;
fwrite($fh, $stringData);

$stringData = ('</width>
<height>');
fwrite($fh, $stringData);

$stringData = $fheight;
fwrite($fh, $stringData);

$stringData = ('</height>
</dimensions>
<position>
<posx>');
fwrite($fh, $stringData);

$stringData = $fposx;
fwrite($fh, $stringData);

$stringData = ('
</posx>
<posy>');
fwrite($fh, $stringData);

$stringData = $fposy;
fwrite($fh, $stringData);

$stringData = ('
</posy>
</position>
<content>
<![CDATA[
');
fwrite($fh, $stringData);

$stringData = $fhtml;
fwrite($fh, $stringData);

$stringData = (']]>
</content>
</section>');
fwrite($fh, $stringData);

/* Close HTML Document */
fclose($fh);

?>