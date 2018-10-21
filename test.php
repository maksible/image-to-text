<?php
namespace IPTT;
require_once('./vendor/autoload.php');
use thiagoalessio\TesseractOCR\TesseractOCR;
// foreach((new TesseractOCR())->availableLanguages() as $lang) echo $lang;
if(isset($_FILES['image'])) {
	if(!empty($_FILES['image']['name'])) {
		if(is_uploaded_file($_FILES['image']['tmp_name'])) {
			$iname = $_FILES['image']['name'];
			$pi = pathinfo($iname);
								
			$itxt = $pi['filename'];
			$iext = strtolower($pi['extension']);
						
										
			if($iext == 'jpg' || $iext == 'jpeg' || $iext == 'bmp' || $iext == 'png' || $iext == 'gif' || $iext == 'tiff')
			{
				// echo (new TesseractOCR($iname))->lang()->run();
				$tocr = new TesseractOCR($iname);
				
				if(isset($_POST['language']) && $_POST['language'] != '')
					$tocr->lang($_POST['language']);
				
				echo $tocr->run();
					
			}
			else return 'Unsupported attached file format.';
		
		}
		else return 'One or more file(s) was not uploaded properly';
	}
// echo (new TesseractOCR('text.png'))->run();
// echo (new TesseractOCR('8055.png'))->run();
// echo (new TesseractOCR('8055.png'))->whitelist(range('A', 'Z'))->run(); didn't work
// echo (new TesseractOCR('Alhamdulillah.jpg'))->lang('ara')->run(); // Extra strings
// echo (new TesseractOCR('ataa-dekhi-Alhamdulillah.jpg'))->run(); // NOT READING ALL
// echo (new TesseractOCR('1907891_768114713236034_3248142464242915158_n.jpg'))->run(); // OK
// echo (new TesseractOCR('dont use sword.jpg'))->run(); // Cand read only End NO DESIgned arebic
// echo (new TesseractOCR('10405611_624982567616354_3336248765151854059_n.jpg'))->lang('guj')->run(); // can't read too LIGHT or too Dark
// echo (new TesseractOCR('german.png'))->lang('deu')->run(); // NO Grrman lang found


// ====== TODO
/*
 * Create Black-White pic to make it more readable.
 * Give user to select/crop pic where he wants to read
*/
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Sample Company house API integration</title>
	<style type="text/css">
	#company_name{
	width: 500px;
	}
	</style>
</head>

<body>
	<div>
		<h3>Select Image you want to convert to text</h3>

		<form action="" method="post" enctype="multipart/form-data">
			<label>Select Image</label>
			<input type="file" name="image" id="image">
			
			<label>Select Language of Image</label>
			<select name="language">
				<option value="">English</option>
				<option value="guj">Gujarati</option>				
				<option value="urd">Urdu</option>
				<option value="hin">Hindi</option>
				<option value="ara">Arabic</option>
			</select>
			<button name="submit" type="submit">Convert</button>
		</form>
	</div>
	
</body>
</html>