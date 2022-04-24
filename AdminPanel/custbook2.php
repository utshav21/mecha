<?php
include 'conn.php';
//$register = false;
//$showError = false;
//if(isset($_POST["submit"]))
//   {
//    $veh_num=$_POST['u_registration1'];
//    
//
//    if($user_password == $user_cpassword){
//        include 'conn.php';
//        
//        $query1 = "INSERT INTO `user_profile` (`u_name`, `u_email`, `u_password`, `u_contact`, `u_acc_created`) VALUES ('$user_username', '$user_email', '$user_password', '$user_contact',current_timestamp())";
//        if(mysqli_query($conn,$query1)){
//            $register = true;
//            echo "<script>window.open('login.php','_self')</script>";
//        }
//        else{
//            $showError = "UserName or Contact already in use";
//        }
//    }
//    else{
//        $showError = "Password Doesnot match";
//
//    }
//}

?>
<html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Website Design </title>
<link rel="stylesheet" href="custbook2.css">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@1,100;1,300;1,600;1,900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.cssq">
</head>
<body>
 
    <div class="container">
        <div class="title">Book Your Service Now</div>
        <form action="#" method="post">

                <div class="user-details">
                <div class="input-box">
                <span class="details">Date</span>
                <input class="text" type="date" name="u_date1">
            </div>
                    
                <div class="input-box">
                <span class="details">Vechile Registration Number</span>
<!--                <input class="text" placeholder="Enter your Vechile Registration Number" name="u_registration1">-->
                    <select name="u_registration1">
                    <option disable selected>Select: </option>
                    <?php
                        $query2="Select veh_reg_num From user_vehicle_details";
                        $records=mysqli_query($conn,$query2);
                        while ($data = mysqli_fetch_array($records)){
                            echo "<option name='".$data['u_registration1']."'>".$data['veh_reg_num']."</option>";
                        }
                    ?>
                    </select>
            </div>
            
            <div class="input-box">
                <span class="details">Hour</span>
                <select class="category">
                    <option value="1">10</option>
                    <option value="2">11</option>
                    <option value="3">12</option>
                    <option value="1">13</option>
                    <option value="2">14</option>
                    <option value="3">15</option>
                    <option value="2">16</option>
                </select>
            </div>
            <div class="input-box">
                <span class="details">minute</span>
                <select class="category">
                    <option value="1">00</option>
                    <option value="2">30</option>
                </select>
            </div>
            <div class="input-box">
                    <span class="details">Description</span>
                    <textarea placeholder="Enter your problem description here"></textarea>
            </div>

        <div class="button">
            <input type="submit" name="submit" value="Book Now">
        </div>
        </div> 
    </form>
</div>

</body>
<html>






     