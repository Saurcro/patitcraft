<!DOCTYPE html>

<html>
	<head>
	 	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Vote - Patitcraft</title>
		<link rel="stylesheet" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Orbitron:500' rel='stylesheet' type='text/css' />
		<link rel="icon" type="image/png" href="favicon.png" />
	</head>
	<body>
		<?php include('header.php');?>
		<br />
		<div class="col-md-4"></div>
		<div class="container col-md-4">
			<?php if(defined(@MSG)) { echo '<h1>' . MSG . '</h1>'; } ?>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="vote1.php" method="post" class="form-signin" role="form">
						<h2 class="form-signin-heading">Entrez votre pseudo Minecraft en jeu</h2>
						<input type="text" class="form-control"  name="username" required autofocus>
						<br />
						<button class="btn btn-lg btn-primary btn-block" type="submit">Vote</button>
					</form>
				</div>
			</div>
		</div>
		<!-- /container -->
		<div class="col-md-4"></div>
	</body>
</html>