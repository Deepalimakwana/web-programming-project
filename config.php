<?php  

$host = "localhost";
$user = "root";
$password = "";
$db = "wpminiproj";

$conn =  mysql_connect($host,$user,$password,$db);


if(!$conn)
{
    die(" <script> alert('Connection failed') </script>");
    
}

?>