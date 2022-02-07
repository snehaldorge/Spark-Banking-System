<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="transition";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "Connection Successful";
}
else
{
    echo "Connection Unsuccessful";
}
?>