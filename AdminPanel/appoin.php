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
                        <div class="title">Company's Dash</div>
                    </a>
                </li>
                <li>
                    <a href="appoinments.php">
                        <i class="fas fa-newspaper"></i>
                        <div class="title">Appointments</div>
                    </a>
                </li>
                <li>
                    <a href="alltechnicians.php">
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
                <li>
                    <a href="#">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <div class="title">Log Out</div>
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
<a href="technicians.php">New-Technicians</a>
<a href="appoin.php">New-Appointments</a>
<div class="animation start-home"></div>
</nav>
<!-- Appointment Settings-->

<div class="container">
        <div class="title">Book A New Service Physically</div>
        <form action="#">

                <div class="user-details">
                <div class="input-box">
                    <span class="details">Customer Name</span>
                    <input class="text" placeholder="Enter customer's name" required>
                </div>
            
            <div class="input-box">
                <span class="details">Email</span>
                <input class="text" placeholder="Enter customer's email" required>
            </div>
           
            <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input class="text" placeholder="Enter customer's contact number" required>
            </div>
            
                <div class="input-box">
                        <span class="details">State</span>
                        <input class="text" placeholder="Enter customer's state" required>
                </div>
                <div class="input-box">
                    <span class="details">Addres</span>
                    <input class="text" placeholder="Enter customer's address" required>
                </div>
                <div class="input-box">
                    <span class="details">Brand</span>
                    <input class="text" placeholder="Enter two wheeler brand" required>
                </div>
           
                <div class="input-box">
                    <span class="details">Model</span>
                    <input class="text" placeholder="Enter two wheeler model" required>
                </div>
            
            <div class="input-box">
                <span class="details">Vechile Registration Number</span>
                <input class="text" placeholder="Enter Vechile Registration Number" required>
            </div>

            <div class="input-box">
                    <span class="details">Odometer(kms)</span>
                    <input class="text" placeholder="Odometer(kms)" required>
            </div>

            <div class="input-box">
                <span class="details">Date</span>
                <input class="text" type="date" required>
            </div>
            
            <div class="input-box">
                    <span class="details">Description</span>
                    <textarea placeholder="Enter your problem description here"></textarea>
            </div>

        <div class="button">
            <input type="submit" value="Book Now">
        </div>
        </div>
        </div>
        
    </form>
</div>

</body>
</html>
