<html>
    <head>
        <title>Display</title>
        <style>
body


{
    background: #d071f9;
}
table
{
    background-color: white;
}
            </style>
    </head>
</html>
<?php
include("connection.php");
error_reporting(0);
$query ="SELECT * FROM form";
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
//echo $total;

if($total !=0)
{
    ?>
    <h2 align="centre"><mark>  Displaying All Customer Records</mark></h2>
<centre><table border="1"cellspacing="7" width="60">
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Mail Id</th>
    <th>Account No</th>
    <th>Phone No</th>
    <th>Address</th>
    <th>Balance</th>
    <th>Operations</th>
    

    </tr>
<?php
    while($result =mysqli_fetch_array($data))
    {
        echo "<tr>
        <td>".$result[0]."</td>
        <td>".$result[1]."</td>
        <td>".$result[2]."</td>
        <td>".$result[3]."</td>
        <td>".$result[4]."</td>
        <td>".$result[5]."</td> 
        <td>".$result[6]."</td> 

        <td><a href='transfer.php'>Transfer</a></td> 
        
        </tr>";
    }
}
else{
    echo "no record found";
}

?>
</table>
</centre>