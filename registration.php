<?php
$register = false;
$showError = false;
if(isset($_POST["submit"]))
   {
    $user_username = $_POST['u_name1'];
    $user_email = $_POST['u_email1'];
    $user_contact = $_POST['u_contact1'];

    $user_password = $_POST['u_passwd1'];
    $user_cpassword = $_POST['u_cpasswd1'];

    if($user_password == $user_cpassword){
        include 'conn.php';
        
        $query1 = "INSERT INTO `user_profile` (`u_name`, `u_email`, `u_password`, `u_contact`, `u_acc_created`) VALUES ('$user_username', '$user_email', '$user_password', '$user_contact',current_timestamp())";
        if(mysqli_query($conn,$query1)){
            $register = true;
            echo "<script>window.open('login.php','_self')</script>";
        }
        else{
            $showError = "UserName or Contact already in use";
        }
    }
    else{
        $showError = "Password Doesnot match";

    }
}

?>

<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Website Design </title>
<link rel="stylesheet" href="registration.css">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@1,100;1,300;1,600;1,900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.cssq">
</head>
<body>

    <div class="container">
        <div class="title">Registration</div>
        <?php
    if($register){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Account Registered!!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
          <form action="#" method="post">  
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input class="text" placeholder="Enter your name"  name="u_name1">
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input class="text" placeholder="Enter your number"  name="u_contact1"> 
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input class="text" placeholder="Enter your address"  name="u_address1">
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input class="text" placeholder="Enter your email"  name="u_email1">
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input class="text" placeholder="Enter your password"  name="u_passwd1">
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input class="text" placeholder="Confirm your password"  name="u_cpasswd1">
                </div>
        
            <button type="doNotSubmit" name="doNotSubmit" class="btnn btn-primary btn-user btn-block"> Get Back </button>
              
              
            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
           </div>   
        <p class="link">Already have an account?</p> 
        <a href="index.php">Login</a>
        </form>
    </div>
    
</body>
<html>






     