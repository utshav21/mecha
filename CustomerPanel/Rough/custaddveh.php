<?php

if(isset($_POST["update"]))
   {
    $v_brand = $_POST['v_brand1'];
    $v_model = $_POST['v_model1'];
    $v_reg_num = $_POST['v_reg_num1'];
    $v_year = $_POST['v_year1'];

    include 'conn.php';
    $query1="INSERT INTO `user_vehicle_details` (`veh_brand`, `veh_model`, `veh_y_o_m`, `veh_reg_num`,`u_ids`) VALUES ('$v_brand', '$v_model', '$v_year','$v_reg_num','6')";
    
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
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Website Design </title>
<link rel="stylesheet" href="custaddveh.css">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@1,100;1,300;1,600;1,900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.cssq">
</head>
<body>
 
    <div class="container">
        <div class="title">Add Your New Two-Wheeler</div>
        <form action="#" method="post">

                <div class="user-details">
                <div class="input-box">
                    <span class="details">Brand</span>
                    <input class="text" placeholder="Enter your two wheeler brand" name="v_brand1">
                </div>
           
                <div class="input-box">
                    <span class="details">Model</span>
                    <input class="text" placeholder="Enter your two wheeler model" name="v_model1">
                </div>
            
            <div class="input-box">
                <span class="details">Vechile Registration Number</span>
                <input class="text" placeholder="Enter your Vechile Registration Number" name="v_reg_num1">
            </div>
            
            <div class="input-box">
                <span class="details">Year of Manufacture</span>
                <input type="number" min="1900" max="2099" step="1" value="2022" name="v_year1" />
                <!-- <input class="text" type="year" name="v_year1" required> -->
            </div>
                    
            <div class="button">
            <input class="btn btn-success" type="submit" name="update" value="Add News">
            </div>
        </div>
    </form>
 </div>
</body>
<html>


<!-- <div class="user-details">
                <div class="input-box">
                    <span class="details">Brand</span>
                    <input class="text" placeholder="Enter your two wheeler brand" required>
                </div>
           
                <div class="input-box">
                    <span class="details">Model</span>
                    <input class="text" placeholder="Enter your two wheeler model" required>
                </div>

                <div class="input-box">
                    <span class="details">Vechile Registration Number</span>
                    <input class="text" placeholder="Enter your Vechile Registration Number" required>
                </div>

                <div class="input-box">
                <span class="details">Year of Manufacture</span>
                <input class="text" placeholder="Enter year of manufacture" required>
                </div>

                <div class="button">
                    <input type="submit" value="Add Vehicle">
                </div>
                </div> -->





     