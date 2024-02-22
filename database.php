<?php
$server="localhost";
$username="root";
$password="";
$dbname="student";

// making connection to the database
$con = mysqli_connect($server,$username,$password,$dbname);
if(!$con){
    echo "not connected";
}
else{
    echo"connected";
}




?>