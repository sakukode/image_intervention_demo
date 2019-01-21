<?php 
// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// configure with favored image driver (gd by default)
Image::configure(array('driver' => 'gd'));

//resize image
$image = Image::make('public/sample.jpg');
$image->resize(500, 300);
//watermark with teks
$image->text('www.rizqimaulana.com', 100, 150, function($font) {
	$font->file('fonts/montserrat_bold.ttf');
	$font->color(array(255, 255, 255, 0.3));
	$font->size(25);	
});
//save as new image with filename sample_thumb.jpg
$image->save('public/sample_thumb.jpg');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Image Intervention - Demo</title>
</head>
<body>
	<p>Gambar Asli</p>
	<img src="public/sample.jpg" alt="sample image" />

	<?php if(file_exists('public/sample_thumb.jpg')):?>
	<p>Gambar Setelah diresize dan diberi watermark</p>
	<img src="public/sample_thumb.jpg" alt="sample thumbnail image" />
	<?php endif;?>

</body>
</html>