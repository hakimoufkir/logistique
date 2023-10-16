<?php
session_start();
require_once("../functions/fonctSession.php"); 
require_once("../functions/fonctConnexion.php");

if(!empty($_POST)) {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $connexionDB = connexionDB();
            $sqlQuery = "INSERT INTO `user` (`id`, `username`, `email`, `password`)
                        VALUES (NULL, '$username', '$email', '$password');";

            $users = $connexionDB->prepare($sqlQuery);
            $users->execute();
            $latest_id = $connexionDB->lastInsertId();

            addSession($latest_id, $username, $email);
            echo "true";
        } else {
            echo 'Invalid';
        }
         

?>
