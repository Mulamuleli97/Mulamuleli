<?php
$server= "127.0.0.1";
$user="root";
$pass="";
$db="test";

$conn=mysqli_connect($server,$user,$pass,$db);

$name = $_POST['name'];
$sur = $_POST['surname'];
$dob = $_POST['dob'];
$rooms = $_POST['rooms'];
$email = $_POST['email'];

if(!$conn)
{
echo"connected failed! due to ".mysqli_error($conn);
}else{
if($name =="")
{
echo("please enter your name" );
}else if($sur =="")
{
echo("please enter your surname");
}else{
$query  = "INSERT INTO booking(name,surname,dob,rooms,email) values('$name','$sur','$dob','$rooms','$email')";
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
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Booking Form HTML Template</title>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	
	<link type="text/css" rel="stylesheet" href="css/style.css" />







<title>booking </title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="container">
<div class="header">
<div class="nav">

</div>

</div>
</div>

<div class="selection">
<div class="head_1">


</div>

<div class="bodyx" align="center">
  
 
  <tr>
</tr>
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Welcome to richfield Visitors section were you book our visitors room  to check out the campus and know more information
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">


<form action="Visit.php" method="post" align="left">
<div class="form-group">
<span class="form-label">Enter your name </span>
<input  class="form-control" type="text" placeholder="name" id="namebox" name="name" required><br>
<input  class="form-control" type="text" placeholder="Surname" id="namebox" name="surname" required><br>

<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
<input   class="form-control" type="date" id="namebox3" name="dob"><p id=",">Include the booking Date?</p>

<input  class="form-control"  type="text" placeholder="Rooms" id="int" name="rooms" required><br>


<input class="form-control"  type="text" placeholder="Mobile number or email address" width="50%" size="45.5%" id="mailbox"  name="email" required><br>

<div class="form-btn">
<input class="submit-btn" type ="submit" class="button2" name="submit" value="Book NOW !" >




                                            </div>
                                        </div>
    </div>
    </div>
    </div>
    </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
