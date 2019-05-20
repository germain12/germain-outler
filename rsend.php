<?php
include 'dbconnect.php';
if (isset($_POST['registreer'])){
			$gebruikersnaam = ($_POST["gebruikersnaam"]);
			$wachtwoord = md5($_POST["wachtwoord"]);
			$permission = 'klant';
			$emailadres = ($_POST["emailadres"]);
			$sql = "INSERT INTO `logindetails`(`gebruikersnaam`, `wachtwoord`, `permission`, `emailadres`) VALUES ('$gebruikersnaam','$wachtwoord','$permission','$emailadres')";
			mysqli_query ($conn, $sql);
			header('location:index.php');

}
?>
