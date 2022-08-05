<html>
<?php include "header.php"?>
    
<section class="header">
<?php include "sidebar.php"?>
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
    
    <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">6</div>
                        <div class="card-name">Total Appointments</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-briefcase"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">1</div>
                        <div class="card-name">Scheduled Appointments</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-biking"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">2</div>
                        <div class="card-name">Vehicles</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-tools"></i>
                    </div>
                </div>
            </div>
           <div class="appointments">
               <div class="heading">
                        <h2>Recent Appointment</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
        <table class="heading">
        <thead>
                            <td>Registered Number</td>
                            <td>Technician</td>
                            <td>Problems</td>
                            <td>Actions</td>
        </thead>
                        <tbody>
                            <tr>
                                <td>Pra03-02-022-1111</td>
                                <td>Anuj Rai</td>
                                <td>Roshan Thapa</td>
                                <td>Suraj Shrestha</td>
                            </tr>
                            <tr>
                                <td>Pra03-02-022-1111</td>
                                <td>Anuj Rai</td>
                                <td>Roshan Thapa</td>
                                <td>Suraj Shrestha</td>
                            </tr>
                            <tr>
                                <td>Pra03-02-022-1111</td>
                                <td>Anuj Rai</td>
                                <td>Roshan Thapa</td>
                                <td>Suraj Shrestha</td>
                            </tr>
                        </tbody>
                    </table>
    </div>
    
       
                <div class="vehicle-details">
                    <div class="heading">
                        <h2>Vehicle Details</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table class="visiting">
                        <thead>
                            <td>Vehicle ID</td>
                            <td>Brand</td>
                            <td>Model</td>
                            <td>Registration Number</td>
                            <td>Edit Details</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Royal Enfield</td>
                                <td>Thunderbird 350X</td>
                                <td>Pra03-02-022-1111</td>
                                <td>
                            <i class="far fa-eye"></i>
                            <i class="far fa-edit"></i>
                            <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Aprilia</td>
                                <td>SR150</td>
                                <td>Ba-02-77-1234</td>
                                <td>
                            <i class="far fa-eye"></i>
                            <i class="far fa-edit"></i>
                            <i class="far fa-trash-alt"></i>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
     <div class="schedule">
            <div class="heading">
                <h2>Scheduled Appointment</h2>
                <a href="#" class="btn">View All</a>
            </div>
            <table class="appointments">
                <thead>
                    <td>Customer Name</td>
                    <td>Service Date</td>
                    <td>Preferred Time</td>
                    <td>Service Type</td>
                    <td>Problem Description</td>
                    <td>Edit Details</td>
                </thead>
                <tbody>
                    <tr>
                        <td>Ajay Chaudhary</td>
                        <td>04-05-2022</td>
                        <td>10:30A.M</td>
                        <td>Periodic Servicing</td>
                        <td>Change breakpads</td>
                        <td>
                            <i class="far fa-eye"></i>
                            <i class="far fa-edit"></i>
                            <i class="far fa-trash-alt"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</html>