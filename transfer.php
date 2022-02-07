<?php include("connection1.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="transfer.css">
    <title>Transfer money History</title>
</head>

<body>
    <div class="container">
        <form action="#" method="POST"> 
    <div class="title">
        Transfer Money
    </div>
    <div class="form2">
        <div class="input_field">
            <label>Sender Name</label>
            <input type="text" class="input" name="sname">

        </div>
        <div class="input_field">
            <label>Sender Id</label>
            <input type="text" class="input" name="sid">
            
        </div>
        <div class="input_field">
            <label>Balance</label>
            <input type="text" class="input" name="balance">
            
        </div>
        <div class="input_field">
            <label>Reciever Name</label>
            <input type="text" class="input" name="rname">
            
        </div>
        <div class="input_field">
            <label>Reciever ID</label>
            <input type="text" class="input" name="rid">
            
        </div>
        <div class="input_field">
            <label>Amount</label>
            <input type="text" class="input" name="amount">
            
        </div>
        
        
    <div class="input_field">
        <input type="submit" value="Send" class="btn" name="register">
    </div>
    </div>
        </form2>
    </div>
</body>
</html>
<?php
if($_POST['register'])
{
   $Sender_name=$_POST['sname'];
   $Sender_id=$_POST['sid'];
   $Balance=$_POST['balance'];
   $Reciever_Name=$_POST['rname'];
   $Reciever_Id=$_POST['rid'];
   $amount=$_POST['amount'];
   
  
  
  $query ="INSERT INTO FORM2 VALUES('$Sender_name','$Sender_id','$Balance','$Reciever_Name','$Reciever_Id','$amount')";
$data = mysqli_query($conn1,$query);
if($data)
{
    echo "Data inserted";
}
else
{
    echo "Data not inserted";
}
}
?>