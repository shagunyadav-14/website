<?php
$host="localhost";
$user="root";
$pass="";
$db="res";



$conn=mysqli_connect($host,$user,$pass,$db);
if($conn){
    echo "connection ok";
}
else{
    echo "failed connection";
}

?>
