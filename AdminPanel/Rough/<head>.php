<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="one1.css">
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
                    <a href="adminindex.php">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Company's Dash</div>
                    </a>
                </li>
                <li>
                    <a href="adminappoinments.php">
                        <i class="fas fa-newspaper"></i>
                        <div class="title">Appointments</div>
                    </a>
                </li>
                <li>
                    <a href="admintechnicians.php">
                        <i class="fas fa-user-md"></i>
                        <div class="title">Technicians/Departments</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <div class="title">Settings</div>
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
<a href="#">Profile</a>
<a href="#">New-Technicians</a>
<a href="adminappointments.php">New-Appointments</a>
<div class="animation start-home"></div>
</nav>
<!-- Profile Settings-->

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
