<html>
<?php 
error_reporting(E_ALL);
	
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

		<tr>
			<td>0001.html</td>
			<td>einfacher Textfluss</td>
			<td></td>
		</tr>
		<tr>
			<td>0002.html</td>
			<td>Umbruch, br, </td>
			<td></td>
		</tr>


			<!-- todo  PHP script scandir get_meta_tags 
		        Link setzen      <meta name="keywords" <br>
                                   content="einfacher Textfluss">     -->

			<!-- $tags = get_meta_tags("metaTags.html"); -->
			<tr>
				<td>metaTags.html</td>
				<td>
					<?php echo get_meta_tags("metaTags.html")['keywords'];   
					?>
				</td>
				<td>
					<?php $tags = get_meta_tags("metaTags.html");
						echo $tags['description'];
					?>
				</td>
			</tr>
	</table>

</body>

</html>