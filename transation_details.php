<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="transation_details.css">
    <title>All User Details</title>
</head>

<body>
    <div class="container">
        <form action="#" method="POST"> 
    <div class="title">
        Customer Detail
    </div>
    <div class="form">
        <div class="input_field">
            <label>First Name</label>
            <input type="text" class="input" name="fname">

        </div>
        <div class="input_field">
            <label>Last Name</label>
            <input type="text" class="input" name="lname">
            
        </div>
        <div class="input_field">
            <label>Mail id</label>
            <input type="text" class="input" name="mailid">
            
        </div>
        <div class="input_field">
            <label>Account No</label>
            <input type="text" class="input" name="ano">
            
        </div>
        <div class="input_field">
            <label>Phone No</label>
            <input type="text" class="input" name="phoneno">
            
        </div>
        <div class="input_field">
            <label>Address</label>
            <input type="text" class="input" name="address">
            
        </div>
        <div class="input_field">
            <label>Balance</label>
            <input type="text" class="input" name="balance">
            
        </div>
        
    <div class="input_field">
        <input type="submit" value="Submit" class="btn" name="register">
    </div>
    </div>
        </form>
    </div>
</body>
</html>
<?php
if($_POST['register'])
{
   $first_name=$_POST['fname'];
   $last_name=$_POST['lname'];
   $mailid=$_POST['mailid'];
   $ano=$_POST['ano'];
   $phone_no=$_POST['phoneno'];
   $address=$_POST['address'];
   $balance=$_POST['balance'];
  
  
  $query ="INSERT INTO FORM VALUES('$first_name','$last_name','$mailid','$ano','$phone_no','$address','$balance')";
$data = mysqli_query($conn,$query);
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