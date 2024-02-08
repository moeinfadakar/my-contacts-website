<?php 

 include "database.php";


mysqli_query($connection ,"DELETE FROM `contacts` ");

header("location: index.php");

?>