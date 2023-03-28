<?php 
$servername = "localhost:3307";
$username = "root";
$password = "";
$databasename = "php form";

$con = mysqli_connect($servername, $username, $password, $databasename);

// if($con)
// {
//     echo "conncetion success...";
// }
// else{
if(!$con)
{
    echo "connection failed...".mysqli_connect_error();
}
?>