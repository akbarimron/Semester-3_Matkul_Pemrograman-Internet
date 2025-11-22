<?php
$img = imagecreatetruecolor(500, 400);
$gray = imagecolorallocate($img, 200, 200, 200);
imagefilledrectangle($img, 0, 0, 500, 400, $gray);
$white = imagecolorallocate($img, 255, 255, 255);
imagestring($img, 5, 200, 190, 'Dummy Image', $white);
imagejpeg($img, __DIR__ . '/storage/app/public/img/dummy.jpg', 80);
imagedestroy($img);
echo "Image created successfully\n";
