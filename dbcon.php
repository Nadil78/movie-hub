<?php
$servername="localhost";
$username="root";
$password="";
$dbname="movie_hub";

try
{
$conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("connection faild ".$conn->connect_error);
    }
    else{
        // echo "connected";
    }
} catch(Exception $e)
{
    echo"Message:".$e->getMessage();
}
?>