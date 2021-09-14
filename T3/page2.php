<?php
	$author_name = "Egon Ubina";
	echo $author_name. " , ";
	// vaatan mida POST saadeti
	//var_dump($_POST);
	
	//kontrollin kas sisestati andmeid
	if(isset($_POST["input_todays_adjective"])){
		echo " sisestati andmed";
		$today_html = "<p>tänane päev on " .$_POST["today_adjective_input"].".</p>";
	};
	
	$photo_dir = "photos/";
	//$all_files = scandir($photo_dir);
	$all_files = array_slice(scandir($photo_dir), 2);
	//var_dump($all_files);
	$file_count = count($all_files);
	$photo_num = mt_rand(0, $file_count - 1);
	//<img src="photos/tlu_astra_600x400_1.jpg" alt="Astra1>
	$photo_html = '<img src="'.$photo_dir .$all_files[$photo_num] . '" alt="Tallinna Ülikool">';
	$allowed_photo_types = ["image/jpeg", "image/png"];
	
	for($i = 0; $i < 1; $i++){
		
		
	}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Mesilased </title>
</head>
<body>
<h1> <a href="https://www.tlu.ee/dt"> EEEEEE </a> </h1>
<p>

siiin on tekst
</p>
<hr>
<!--ekraanivormm-->
<form method="post">
<input type="tekst" name="today_adjective_input" placeholder="tänase päeva ilma omadus">
<input type="submit" name="input_todays_adjective" >
</form>
<hr>

<?php 
echo $today_html;
echo $photo_html;
?>
</body>
</html>