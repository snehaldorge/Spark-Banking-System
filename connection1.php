<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="attachment";
$conn1 = mysqli_connect($servername,$username,$password,$dbname);
if($conn1)
{
    echo "Connection Successful";
}
else
{
    echo "Connection Unsuccessful";
}
?>