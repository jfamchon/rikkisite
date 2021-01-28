<?php

	$return = array();
	if (isset($_POST["name"]) && ($_POST["name"] != null)){ $name = $_POST["name"];}else{$name = null;}
	if (isset($_POST["tel"]) && ($_POST["tel"] != null)){ $tel = $_POST["tel"];}else{$tel = null;}
	if (isset($_POST["mail"]) && ($_POST["mail"] != null)){ $mail = $_POST["mail"];}else{$mail = null;}
	if (isset($_POST["message"]) && ($_POST["message"] != null)){ $message = $_POST["message"];}else{$message = null;}

	if (($name != null) && ($tel != null) && ($mail != null) && ($message != null)){
		if(mail('jimmy.famchon@genfit.com', 'Mon Sujet', 'test')){
			$retun = array("error" => 0);
		}else{
			$retun = array("error" => 1);
		}
	}

		echo json_encode($retun);
	
?>
