<?php
if (isset($_GET['logout'])) {
	delSession();
}

if ((isset($_POST['userNameConnexion'])) && (isset($_POST['passwordConnexion']))) {
	
	$connexionDB = connexionDB();

	$userNameConnexion = $_POST['userNameConnexion'];
	$passwordConnexion = $_POST['passwordConnexion'];

	// echo $userNameConnexion;
	// echo $passwordConnexion;


	$sqlQuery = "SELECT * FROM `user` WHERE `username`='$userNameConnexion' AND `password`='$passwordConnexion'";
	

	$users = $connexionDB->prepare($sqlQuery);
	$users->execute();

	$user = $users->fetchAll();

	// print_r($user);

	if (empty($user)) {
		$erreurConnexion = true;
	} else {
		addSession($user[0]['id'], $user[0]['username'], $user[0]['email']);
	}
}




?>