<?php 

$host="localhost";
$username="root";
$password="";
$database="phpadminpanel";


//connection

$con = mysqli_connect("$host", "$username", "$password", "$database");

//check coonection
if(!$con)
{
  // header("Location: ../error/db.php");
    die();
}

else {
  // echo "Database connected.!";
}

?>