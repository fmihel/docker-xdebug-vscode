<?php
require_once __DIR__.'/vendor/autoload.php';
use fmihel\console;

console::log('test imagick');
//-----------------------------------------------------
header('Content-type: image/jpeg');
$image = new Imagick(__DIR__.'/media/image.jpg');
$image->thumbnailImage(100, 0);

echo $image;
//-----------------------------------------------------
//phpinfo();

