<html>
<?php 
error_reporting(E_ALL & ~E_NOTICE);
function list_files()
{
  $dir = opendir("./");
          while($file = readdir($dir))
            {
              if(is_file($file)	&& $file != "." && $file != "..")
			  {
                $array[] = $file;
				 }
			}
	return $array;
}
	
	
	?>
<head>
	<meta content="utf-8">
	<title>Beispieldateien zu HTML</title>
	<meta name="Keywords" content="Liste">
	<meta name="Description" content="Liste der Dateien mit Schlüsselworten">

</head>

<body>
	<h3>Herzlich Willkommen auf den Beispielseiten zum HTML Kurs.</h3>
	<h4><a href="http://fachwissen.click/course/view.php?id=55">Den Kurs finden Sie hier</a></h4>

	<h5>Die Dateien im Einzelnen</h5>

	<table>
		<tr>
			<th>Bezeichnung</th>
			<th>Begriffe</th>
			<th>Thema</th>
		</tr>
<?php
		$file_array = list_files();
	foreach($file_array as $filename)
	{
		$tags = get_meta_tags($filename);
		echo "<tr><td><a href=$filename>$filename</a></td><td>".$tags['keywords']."</td><td>".$tags['description']."</td></tr>";
	}

?>

			
	</table>

</body>

</html>