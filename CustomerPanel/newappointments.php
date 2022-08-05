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
 

            
        <div class="container" style="margin-top: 100px;">
        <div class="title">Book Your Service Now</div>
        <form action="#" method="post">

                <div class="user-details">
                <div class="input-box">
                <span class="details">Date</span>
                <input class="text" type="date" name="u_date1">
                </div>
                    
                <div class="input-box">
                <span class="details">Select Your Vehicle</span>
                    <select name="u_registration1">
                    <option disable selected>Select:1 </option>
                    <option disable selected>Select:2 </option>
                    <option disable selected>Select:3 </option>
                    <option disable selected>Select:New </option>
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

</div>
</body>
<html>






     