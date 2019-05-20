<!doctype html>
<html lang="en">
<?php
error_reporting(0);
//include 'header.php';
include 'dbconnect.php';
session_start();
if ( isset( $_SESSION['usertype'] ) ) {
} else {
    header("Location: loginpaneel.php");
}
header( "refresh:5;url=paneel.php" );
?>
 <head>
    <title>Inloggen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
 <?php
	include 'dbconnect.php';


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT gebruikersnaam, wachtwoord, geboortedatum, pasgeldig, pasnr, reknr, tan FROM logindetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='paneel'>". "gebruikersnaam: " . $row["gebruikersnaam"]. "</br>".  " wachtwoord: " . $row["wachtwoord"]."</br>". "Geboortedatum:" . $row["geboortedatum"]."</br>". "Pasgeldig:" .$row["pasgeldig"]."</br>". "pasnr:" .$row["pasnr"]."</br>". "reknr:" .$row["reknr"]."</br>"."ta:" .$row["tan"]. "</br>"."nieuwepin:" .$row["nieuwepin"]. "</br>"."tweedenieuwepin:" .$row["tweedenieuwepin"]. "</br>"."dag:" .$row["dag"]. "</br>"."</div>". "</br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
<a href="logout.php">Log Out Btn</a>
</body>
</html>