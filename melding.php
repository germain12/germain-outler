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
// the message
if 
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("akda3990@gmail.com","My subject",$msg);
?> 