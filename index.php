
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
		echo "<p>Želiš postati neku sliku.</p>";
	}
}
//echo print_r($_FILES);
?>
</body>

</html>

