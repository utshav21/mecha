<?php
if(isset($_POST["update"])){
    
    include 'conn.php';

    $firstname = $_POST['firstname1'];
    $lastname= $_POST['lastname1'];
    $contact= $_POST['contact1'];
    $email= $_POST['email1'];
    $password= $_POST['password1'];
    $sql = "INSERT INTO `user_profile`(`u_name`, `u_lname`, `u_contact`, `u_email`, `u_password`, `u_acc_created`) VALUES (('$firstname', '$lastname', '$contact', '$email', '$password')";
    if($conn->query($sql) == true){
        echo "Successfully inserted";
    
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
      
    }
    $conn->close();
}
?>



"INSERT INTO `user_profile`(`u_id`, `u_name`, `u_contact`, `u_email`, `u_password`, `u_acc_created`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="settings.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
    
<section class="header">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-tools"></i>
                        <div class="title">makeuniq.np</div>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Customer's Dash</div>
                    </a>
                </li>
                <li>
                    <a href="allappointments.php">
                        <i class="fas fa-newspaper"></i>
                        <div class="title">All Appointments</div>
                    </a>
                </li>
                <li>
                    <a href="newappointments.php">
                        <i class="fas fa-book"></i>
                        <div class="title">New appointment</div>
                    </a>
                </li>
                <li>
                    <a href="settings.php">
                        <i class="fas fa-cog"></i>
                        <div class="title">Settings</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="#"></i>
                        <div class="title">Sign Out</div>
                    </a>
                </li>
            </ul>
        </div>
</section>

        <div class="main">
            <div class="top-bar">
                <div class="search">
                    <input type="text" name="search" placeholder="search here">
                    <label for="search"><i class="fas fa-search"></i></label>
                </div>
                <i class=""></i>
                <div class="user">
                    <img src="images/logo.PNG" alt="">
                </div>
            </div>    

<nav>
<a href="settings.php">Profile</a>
<a href="newvehicle.php">Add-Vehicles</a>
<a href="appointments.php">New-Appointments</a>
<div class="animation start-home"></div>
</nav>
<!-- Profile Settings-->

<div class="container">
        <div class="title">Manage Your Profile</div>
        <form action="#">

            <div class="user-details">
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input class="text" type="text" name="firstname1">
                </div>
            
                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input class="text" type="text" name="lastname1">
                </div>

                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input class="text" type="text"  name="contact1">
                </div>
                
                <div class="input-box">
                    <span class="details">Email</span>
                    <input class="text" type="text" name="email1">
                </div>
            
                <div class="input-box">
                    <span class="details">Addres</span>
                    <input class="text" type="text" name="address1">
                </div>

                <div class="input-box">
                    <span class="details">New Password</span>
                    <input class="text" type="password" name="password1">
                </div>
           
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input class="text" type="password"   name="confirm1">
                </div>
            
                <div class="button">
                    <input class="hero-btn red-btn" type="submit" name="update" value="Update Profile">
                </div>

        </form>
</div>

</body>
</html>
