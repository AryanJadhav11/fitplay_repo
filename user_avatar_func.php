<?php 
function make_avatar($character)
{
    $path='avatar/' . time() . '.png';
    $image = imagecreate(200,200);
    $red=rand(0,255);
    $green=rand(0,255);
    $blue=rand(0,255);

    imagecolorallocate($image,$red,$green,$blue);

    $textcolor=imagecolorallocate($image,255,255,255);

    imagettftext($image,100,0,55,150,$textcolor,'font/ariel.ttf',$character);

    header('Content-type: image/png');
    imagepng($image,$path);
    imagedestroy($image);

    return $path;
}
?>