
<?php

if(isset($_POST["submit"]))
   {
    $tech_name = $_POST['tech_name1'];
    $tech_contact = $_POST['tech_contact1'];
    $tech_address = $_POST['tech_address1'];
    $tech_email = $_POST['tech_email1'];
    $tech_speciality = $_POST['tech_speciality1'];


    include 'conn.php';
    $query1="INSERT INTO `technicians_profile` (`t_name`, `t_contact`, `t_address`, `t_speciality`,`t_email`) VALUES ('$tech_name', '$tech_contact', '$tech_address','$tech_speciality','$tech_email')";
    
    if(mysqli_query($conn,$query1))
	{
	//    echo "<script>window.open('index.php?updated=Record Has Been Updated','_self')</script>";
    echo $query1;
	}
	else{
		// echo "<div class='alert alert-danger' role='alert'> <b> Error!!! </b> <br>This Number is already in use. Please check the number you are trying to update</div>";
	echo $query1;
	}
}
 
?>

<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Website Design </title>
<link rel="stylesheet" href="addtech.css">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@1,100;1,300;1,600;1,900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.cssq">
</head>
<body>

    <div class="container">
        <div class="title">Add Technicians</div>
          <form action="#" method="post">  
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input class="text" placeholder="Enter your name"  name="tech_name1">
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input class="text" placeholder="Enter your number"  name="tech_contact1"> 
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input class="text" placeholder="Enter your address"  name="tech_address1">
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input class="text" placeholder="Enter your email"  name="tech_email1">
                </div>
                <div class="input-box">
                    <span class="details">speciality</span>
                    <input class="text" placeholder="Enter your department"  name="tech_speciality1">
                </div>
                <!-- <div class="input-box">
                <span class="details">Joined Date</span>
                <input class="text" type="date" name="uech_date1">
            </div> -->
            <div class="button">
            <input type="submit" name="submit" value="Add">
            </div>
           </div>   
        </form>
    </div>
    
</body>
<html>






     