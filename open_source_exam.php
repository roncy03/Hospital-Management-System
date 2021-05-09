<?php

header('Content-type: image/png');
$handle = imagecreate(100, 100);
$background = imagecolorallocate($handle, 255, 255, 255);
$red = imagecolorallocate($handle, 255, 0, 0);
$green = imagecolorallocate($handle, 0, 255, 0);
$blue = imagecolorallocate($handle, 0, 0, 255);

imagefilledarc($handle, 50, 50, 100, 50, 0, 90, $red, IMG_ARC_PIE);
imagefilledarc($handle, 50, 50, 100, 50, 90, 225 , $blue, IMG_ARC_PIE);
imagefilledarc($handle, 50, 50, 100, 50, 225, 360 , $green, IMG_ARC_PIE);
imagepng($handle);

?>
