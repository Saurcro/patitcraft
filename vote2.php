<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PatitCraft - Vote</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	
	<body>
		<form action="vote2_validation.php" method="post">
			<input id="username" name="username" type="text" placeholder="Entrez votre pseudo" autofocus>
			<input type="submit" value="Recevoir ma récompense"/><?php $validation = time() #à faire : 1.transferer la variable $validation à la 2eme page 2. faire que quand le visiteur a voté, la variable validation lui est inchangable pendant 24h (86400 sec)?> 
		</form>
	</body>
</html>