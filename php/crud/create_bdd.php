<?php
$host= "localhost";
$user= "root";
$pass= "";

$conn = mysqli_connect($host,$user,$pass);


$sql = "CREATE DATABASE if not exists test"; 

if(mysqli_query($conn,$sql)){
    echo "crée";
}else{
    echo "Creation KO";
}
echo '<hr>';

mysqli_close($conn)

?>