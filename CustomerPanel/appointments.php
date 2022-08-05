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
<!-- Vehicle Settings-->

<div class="container">
        <div class="title">Book Your Service Now</div>
        <form action="#">

            <div class="user-details">Type
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="bike" value="option1"/>
                    <label class="form-check-label" for="bike">Bike</label>
                  </div>
          
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Scooter" value="option2"/>
                    <label class="form-check-label" for="scooter">Scooter</label>
                  </div>

                <div class="user-details">
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
                    <span class="details">Odometer(kms)</span>
                    <input class="text" placeholder="Odometer(kms)" required>
            </div>

            <div class="input-box">
                <span class="details">Year of Manufacture</span>
                <input type="number" min="1900" max="2099" step="1" value="2022" required/>
            </div>

            <div class="input-box">
                <span class="details">Date</span>
                <input class="text" type="date" required>
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
            <input type="submit" value="Book Now">
        </div>
        </div>
        </div>
        
    </form>
</div>