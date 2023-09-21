<?php
$host="localhost";
$password="";
$db="yummy";
$conn=new mysqli($host,"root",$password,$db);
if($conn->connect_error){
    echo "connecion error";
}
?>