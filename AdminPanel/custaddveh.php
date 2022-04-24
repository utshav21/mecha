<?php
if(isset($_POST["submit"]))
   {
    $v_brand = $_post['v_brand1'];
    $v_model = $_post['v_model1'];
    $v_reg_num = $_post['v_reg_num1'];
    $v_year = $_post['v_year1'];

    $query1="INSERT INTO `user_vehicle_details` (`veh_brand`, `veh_model`, `veh_y_o_m`, `veh_reg_num`,`u_ids`) VALUES ('$v_brand', '$v_model', '$v_year','$v_reg_num','6')";
    
    if(mysqli_query($conn,$query1))
	{
	//    echo "<script>window.open('index.php?updated=Record Has Been Updated','_self')</script>";
    echo $query1;
	}
	else{
		echo "<div class='alert alert-danger' role='alert'> <b> Error!!! </b> <br>This Number is already in use. Please check the number you are trying to update</div>";
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
        <form action="#" method="POST">

            <div class="user-details">Type
                <div class="user-details">
                <div class="input-box">
                    <span class="details">Brand</span>
                    <input class="text" placeholder="Enter your two wheeler brand" name="v_brand1" required>
                </div>
           
                <div class="input-box">
                    <span class="details">Model</span>
                    <input class="text" placeholder="Enter your two wheeler model" name="v_model1" required>
                </div>
            
            <div class="input-box">
                <span class="details">Vechile Registration Number</span>
                <input class="text" placeholder="Enter your Vechile Registration Number" name="v_reg_num1" required>
            </div>
            
            <div class="input-box">
                <span class="details">Year of Manufacture</span>
                <input class="text" type="date" name="v_year1" required>
            </div>
                    
            <div class="button">
            <input type="submit" name="submit" value="Add Now">
            </div>
        </div>
            </div>
    </form>
 </div>
</body>
<html>






     