<?php
$host='localhost';
$user='root';
$pass='Root@1234!@#$';
$db='article';
$conn=mysqli_connect($host,$user,$pass,$db);
if(isset($conn)){
}else {
    echo "Error not connected";
}
?>