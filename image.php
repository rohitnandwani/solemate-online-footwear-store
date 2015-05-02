<?php

$imagepath="phpimages/nis.jpg";

$image=imagecreatefromjpeg($imagepath);

header('Content-Type: image/jpeg');

imagejpeg($image);

?>