<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>PatiCraft - Vote</title>
		<link rel="stylesheet" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Orbitron:500' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
	</head>
	
	<body>
	<?php include("header.php");?>
	<center>
		<iframe id="oframe" name="oframe"src="http://www.serveurs-minecraft.org/vote.php?id=40216" width="1050" height="2500" onload="iframe_status()" sandbox="allow-forms allow-scripts" ></iframe>
	</center>
		<?php
			require_once 'simple_html_dom.php';

			$html = file_get_html('http://www.serveurs-minecraft.org/vote.php?id=40216');

				//Pas trouvé de solution, en pause pr l'instant

			if (preg_match("/boost/", $html)) {
				echo "marche";
			}

		?>
	
	</body>
</html>