<?php
   include("dbconnect.php");
   $error = false;
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
    {
$login = mysqli_real_escape_string($conn,$_POST['login']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$encryptedpassword = MD5($password);


$sql="SELECT * FROM accounts WHERE Login='$login' AND Password='$encryptedpassword'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$_SESSION['id']=$row['id'];
$_SESSION['usertype']=$row['usertype'];
$_SESSION['login']=$row['login'];
$_SESSION['firstname']=$row['firstname'];
$count=mysqli_num_rows($result);

echo $count;
echo $login;
if($count==1){
	if($row['usertype']=="admin")
	{
		header ("location: paneel.php");
	}
	else if ($row['usertype']=="user")
		header ("location: ip.php");
}

else{
echo "Sad, something went wrong xd.<br/>";
}
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="stylepa.css">

    <title>Login</title>
</head>
<body>
    <div class="login">
        <form method="post">
			<?php if($error){ ?>
			<div class="error"> Your email or password is wrong.</div>
			<?php } ?>
            <h2 style=color:white;>KKK</h2>
            <div class="form-group"><input class="form-control" type="login" name="login" placeholder="login"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Wachtwoord of email vergeten?</a>
		</form>
    </div>
</body>

</html>