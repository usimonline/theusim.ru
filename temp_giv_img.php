<?php
require_once('requisites.php');
$filename_temp = $site_url.'picture/obuchenie/kursi-personalnogo-stilja/img_1';
$file_ex = file_exists($filename_temp);

$size = getimagesize($filename_temp);

$size_width = $size[0];
$size_height = $size[1];

echo $size_width.','.$size_height.';';