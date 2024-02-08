<?php 
// ا  connect to server :  

$connection= mysqli_connect("localhost","root","","contact_list");

// lang : 

mysqli_query($connection, "SET CHARACTER SET utf8");

// connection test : 

if (mysqli_connect_errno() == 0){
    
}
else{
    print(mysqli_connect_error());
    echo "خطا رخ داده";
}

?>