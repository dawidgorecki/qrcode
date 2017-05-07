<?php

header('Content-Type: image/png');

use Endroid\QrCode\QrCode;
require 'vendor/autoload.php';

if (isset($_POST['text'])) {
  $qrCode = new QrCode();

  $text    = htmlentities(trim($_POST['text']));
  $size    = !empty($_POST['size']) ? $_POST['size'] : 200;
  $padding = !empty($_POST['padding']) ? $_POST['padding'] : 10;

  $size    = intval($size);
  $padding = intval($padding);

  $qrCode->setText($text);
  $qrCode->setSize($size);
  $qrCode->setPadding($padding);
  $qrCode->render();
}