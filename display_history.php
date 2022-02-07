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
include("connection1.php");
error_reporting(0);
$query ="SELECT * FROM form2";
$data = mysqli_query($conn1,$query);
$total=mysqli_num_rows($data);
//echo $total;

if($total !=0)
{
    ?>
    <h2 align="centre"><mark>Transaction History</mark></h2>
<centre><table border="1"cellspacing="7" width="60">
    <tr>
    <th width=10px>Sender Name</th>
    <th>Sender Id</th>
    <th>Balance</th>
    <th>Reciever Name</th>
    <th>Reciever Id</th>
    <th>Amount</th>
    
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

        
        </tr>";
    }
}
else{
    echo "no record found";
}

?>
</table>
</centre>