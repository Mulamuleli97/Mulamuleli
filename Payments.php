<?php
$server= "127.0.0.1";
$user="root";
$pass="";
$db="test";

$conn=mysqli_connect($server,$user,$pass,$db);

$Cardnumber = $_POST['Cardnumber'];
$Expirydate = $_POST['Expirydate'];
$Cvc = $_POST['Cvc'];
$Cardname = $_POST['Cardname'];
$Amount = $_POST['Amount'];
$Studentnumber= $_POST['Studentnumber'];
if(!$conn)
{
echo"connected failed! due to ".mysqli_error($conn);
}else{
if($Cardnumber =="")
{
echo("please enter Card Number" );
}else if($Cardname =="")
{
echo("please enter your surname");
}else{
$query  = "INSERT INTO payment(Cardnumber,Expirydate,Cvc,Cardname,Amount,Studentnumber) values('$Cardnumber','$Expirydate','$Cvc','$Cardname',$Amount,$Studentnumber)";
$execute = mysqli_query($conn,$query);
if(!$execute)
{
echo("Not successfully due to ". mysqli_error($conn));
}else{
echo("Success");
}
}
}

?>
<html>
<head>
<title>THE ELITE</title>
<link rel="stylesheet" href="Payment.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
       
<div class="app-container">
	<div class="top-box">
	<p><span class="lefticon">&#x2190;</span>CHECKOUT<span  class="right-icon">&#xb7;&#xb7;&#xb7;</span></p>
	</div>
  <div class="middle-box">
    <h1>1599<span>ZAR</span></h1>
    <p>Pay To RichField Ltd</p>
  </div>
  <div clas="bottom-box">
      
  <button type="button" class="payment-option-btn">Pay with PayPal</button> 
  <button type="button" class="payment-option-btn">Pay using Netbanking</button> 
  <div class="card-details">
      <form action="Payments.php" method="post" align="left">
    <p>Pay using credit or debit card</p>
    <div class="card-num-field-group">
<label>Card Number</label>
      <input type="text" id="Cardnumber" name="Cardnumber" class="card-num-field" placeHolder="xxxx-xxxx-xxxx-xxxx">
    </div>
    <div class="date-field-group">
    <label>Expiry Date</label><br>
      <input type="date" class="date-field" id="Expirydate" name="Expirydate">
   
        
  
     </div>
    <div class="cvc-field-group">
    <label>CVC</label><br>
      <input type="password"id="Cvc" name="Cvc" class="cvc-field" placeholder="xxx">
    </div>
     <div class="name-field-group">
    <label>Card Holder Name</label><br>
      <input type="text" id="Cardname" name="Cardname" class="name-field" placeholder="Full Name">
</div>
<div class="name-field-group">
    <label>Enter Amount u want to pay </label><br>
      <input type="text" id="Amount" name="Amount" class="name-field" placeholder="Enter Amount">
</div>
           <div class="cvc-field-group">
          <label>Student Number</label>
      <input type="text" id="Studentnumber" name="Studentnumber" class="card-num-field" placeHolder="Student Number">
          </div>
    <button type="submit" class="pay-btn" name="submit" value="Create Account">Pay Now</button>
          <input type ="submit" class="button2" name="submit" value="Create Account" >
      </form>
      </div>
      
          </div>
    </div>
    

</body>
</html>