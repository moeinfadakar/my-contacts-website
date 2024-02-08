<?php 

include "database.php";

$nam = $_POST["fname"];
$fmil = $_POST["lname"];
$emails = $_POST["Email"];
$phones = $_POST["phone"];
$homes = $_POST["home"];



mysqli_query($connection," INSERT INTO contacts( fname, lname, Email, phone, home) values('$nam','$fmil','$emails','$phones','$homes') ");
echo "داداش حل شد ";

header("location: index.php");

?>

