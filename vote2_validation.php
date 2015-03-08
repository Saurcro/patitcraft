<?php
if (isset($validation)) {
	function verifVote($adress_ip)
	{
		$api_adress = "http://www.serveursminecraft.org/verifvote.php?id_s=220&ip=$adress_ip";
		$api_result = @file_get_contents($api_adress);
		if($api_result == 'true')
		{
		return true;
		}else{
		return false;
		}
	}

            if(verifVote($_SERVER['REMOTE_ADDR']))
			{
				require_once 'class.votifier.php';
				if(isset($_POST['username']))
				{
					$oVote = new Votifier(
							'srv57.minecraft-mania.fr',
							30003,
							'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgHOETIHw9uFo7xC9A2QPlqxXtPfq3cCORatNKyMjhJVPHB0tB5PSl58Kwh5hVpQBv5Scb7BCB2U5R2KXXnLB9iLDMUM3J9VR/mtP6v8bCqf0QG+nbFFOk2GTVhY1pqqkMRTYUH9RYhVR2cEhmAYhrXH+MQhiPWCVNLyUp/KH1Y8E0+bOCVeaH4hJqXh/Ejpl3tNly4n6nlQeVEJtsHfHOfpvpHWSdH6U3Tgua6Ce6KByij59WUleMD9MkdVp/VqogWK7Gkp8CTzjoVqIh8z6vanCHrZlIIqc92Vo8PXyzBh1cWiPADD0c9C6e9BPZDgTlHtRoOlKROucrcGZNMqogwIDAQAB',
							$_POST['username'],
							'serveursminecraft.org');
					if($oVote->send())
						define('MSG', 'Vote successful sended');
						$validation += 86400;
					else
						define('MSG', 'No connection with server');
				}
			}
			else{
				echo "Vous n'avez pas voté";
			}
}
else{
	echo "Erreur durant la validation du vote";
}
?>