
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 

	$file_type = "PNG";
	$dpi = 73;
	$thickness = 30;
	$scale = 2;
	$rotation = 0;
	$font = "Arial.ttf";
	$font_size = 20;
	$text = "Ahmed Badawy";
	// $link = "http://localhost/ahmed-badawy.com/public/barcodegen-1d/html/image.php?filetype=JPEG&dpi=72&scale=2&rotation=0&font_family=Arial.ttf&font_size=30&text=hello&thickness=20&checksum=&code=BCGcode39extended";

$link = "html/image.php?filetype=".$file_type."&dpi=".$dpi."&scale=".$scale."&rotation=".$rotation."&font_family=".$font.
		"&font_size=".$font_size."&text=".$text."&thickness=".$thickness."&code=BCGcode39extended";
?>

<img src="<?php echo $link; ?>" >



</body>
</html>


