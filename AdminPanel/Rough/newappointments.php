<html>
<?php include "custheader.php"?>
    
<section class="header">
<?php include "custsidebar.php"?>
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
                    <span class="details">Full Name</span>
                    <input class="text" placeholder="Enter your name" required>
                </div>
            
            <div class="input-box">
                <span class="details">Email</span>
                <input class="text" placeholder="Enter your email" required>
            </div>
           
            <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input class="text" placeholder="Enter your number" required>
            </div>
            
                <div class="input-box">
                        <span class="details">State</span>
                        <input class="text" placeholder="Enter your state" required>
                </div>
                <div class="input-box">
                    <span class="details">Addres</span>
                    <input class="text" placeholder="Enter your address" required>
                </div>
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

</body>
<html>






     