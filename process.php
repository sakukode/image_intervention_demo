<?php
// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'gd'));

$image = $manager->make('public/sample.jpg')->resize(400, 200);
$image->save('public/sample_thumb.jpg');


