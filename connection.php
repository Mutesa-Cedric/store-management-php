<?php

//database connection oop
$connection=new mysqli("localhost","root","","store_ms");

if($connection->connect_error){
    die("connection failed: ".$connection->connect_error);
}else{
    // echo " database \"store_ms\" was connected successfully";
}
//database connection oop

?>