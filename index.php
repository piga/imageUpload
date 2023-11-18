
<html>
<body>
<h1>Upoadajte sliku na server</h1>

<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="slika">
	<input type="submit" value="Uploadaj">
</form>

<?php

if(!$_FILES)
{
	echo "<p>Ništa nije uploadano</p>";
}
else
{
	$postana_slika = $_FILES["slika"];
	if(!$postana_slika)
	{
		echo "<p>Nije postana slika.</p>";
	}
	else
	{
		$formati = [
			"png" => "image/png",
			"jpg" => "image/jpg",
			"jpg" => "image/jpeg",
			"gif" => "image/gif"
		];
		$type = $postana_slika["type"];
		$dir = "/var/www/html/backend/vježba12/";
		
		if(!in_array($type, $formati))
		{
			echo "<p>Nije podržan format.</p>";
		}
		else
		{
			if(!file_exists($dir)) mkdir($dir, 0777, true);
			$name = basename($postana_slika["name"]);
			$tmp_name = $postana_slika["tmp_name"];
			$rez = move_uploaded_file($tmp_name, "$dir.$name") ? "Datoteka je uspješno uploadana." : "Nije uspio upload.";
			echo $rez;
		}
		echo "<p>".$postana_slika['type']."</p>";
	}
}
//echo print_r($_FILES);
?>
</body>

</html>

