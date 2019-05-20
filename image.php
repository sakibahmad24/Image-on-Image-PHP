<?php

	$png = imagecreatefrompng('frame.png');
	$jpeg = imagecreatefromjpeg('back.jpg');

	list($width, $height) = getimagesize('back.jpg');
	list($newwidth, $newheight) = getimagesize('frame.png');
	$out = imagecreatetruecolor($newwidth, $newheight);
	imagecopyresampled($out, $jpeg, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
	imagecopyresampled($out, $png, 0, 0, 0, 0, $newwidth, $newheight, $newwidth, $newheight);
	if(imagejpeg($out, 'out.jpg', 100)){
		echo "Image Generated.Pls check root directory";
	}
?>