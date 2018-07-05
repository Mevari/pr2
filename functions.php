<?php
function debug($arr) {
    echo "<pre>" . print_r($arr, true) ."</pre>";
}

function ImageProporcional($pathtoimage, $width, $height, $quality = 80) {
    $pathConstruct = \yii\helpers\Url::to('@webroot/' . $pathtoimage);
    $imagem = \yii\imagine\Image::getImagine();
    $getimg = $imagem->open($pathConstruct);
    $size = new \Imagine\Image\Box($width, $height);
    // We created the thumbnail with the data defined in the box
    $resizeimg = $getimg->thumbnail($size, \Imagine\Image\ImageInterface::THUMBNAIL_INSET);
    // Get real size
    $sizeR = $resizeimg->getSize();
    $widthR = $sizeR->getWidth();
    $heightR = $sizeR->getHeight();
    $preserve = $imagem->create($size);

    $startX = $startY = 0;
    if ($widthR < $width) {
        $startX = ( $width - $widthR ) / 2;
    }

    if ($heightR < $height) {
        $startY = ( $height - $heightR ) / 2;
    }
    $preserve->paste($resizeimg, new \Imagine\Image\Point($startX, $startY))->save($pathConstruct, ['quality' => $quality]);

}