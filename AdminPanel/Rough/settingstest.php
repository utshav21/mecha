<html>
<?php include "adminheader.php"?>
<body>
    
<section class="header">
<?php include "adminsidebar.php"?>
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
   
    
            <div class="container">
        <div class="title">Manage Your Profile</div>
        <form action="#">

                <div class="user-details">
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input class="text" type="text" required>
                </div>
            
                <div class="user-details">
                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input class="text" type="text" required>
                </div>

                <div class="input-box">
                    <span class="details">Email</span>
                    <input class="text" type="text" required>
                </div>
           
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input class="text" type="text"  required>
                </div>
            
                <div class="input-box">
                    <span class="details">Addres</span>
                    <input class="text" type="text" required>
                </div>

                <div class="input-box">
                    <span class="details">New Password</span>
                    <input class="text" type="password" required>
                </div>
           
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input class="text" type="password"  required>
                </div>
            
                <div class="button">
                    <input type="submit" value="Update Profile">
                </div>
        </form>
</div>    
        
</body>
</html>