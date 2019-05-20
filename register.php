<?php
include 'dbconnect.php';
?>
<html>
<body>

<form method="post" action ="rsend.php">
Gebruikersnaam: <input type="text" name="gebruikersnaam" required><br>
Wachtwoord: <input type="text" name="wachtwoord" required><br> 
Email adres: <input type="text" name="emailadres" required><br>
<input type="submit" name="registreer" value="registreer">
</form>

</body>
</html> 

