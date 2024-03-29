<html>
<?php include "header.php"?>
<body>
    
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
                        <div class="card-name">Appointments</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-briefcase"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">2</div>
                        <div class="card-name">Added Vehicles</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-biking"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">3</div>
                        <div class="card-name">Periodic Servicing</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-tools"></i>
                    </div>
                </div>
            </div>
            <div class="tables">
                <div class="today-appointments">
                    <div class="heading">
                        <h2>Today's Appointments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table class="appointments">
                        <thead>
                            <td>Registered Number</td>
                            <td>Technician</td>
                            <td>Problems</td>
                            <td>Actions</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pra03-02-16Pa-4566</td>
                                <td>Suraj Shrestha</td>
                                <td>General Servicing</td>
                                <td>Serviced</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Pra03-02-07Pa-5936</td>
                                <td>Roshan Thapa</td>
                                <td>Clutchplates</td>
                                <td>Changed Clutchplates</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Ba-02-77-1234</td>
                                <td>Anuj Rai</td>
                                <td>Problem in pick up</td>
                                <td>Spark Plugs replaced and Carburetor Cleaned</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Pra03-02-022-1111</td>
                                <td>Suraj Shrestha</td>
                                <td>General Servicing</td>
                                <td>Serviced</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Ba-02-89-3514</td>
                                <td>Ajay Chaudhary</td>
                                <td>Noise from Chain</td>
                                <td>Chain adjusted and lubes</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Ba-02-94-9807</td>
                                <td>Roshan Thapa</td>
                                <td>Problem in Meter</td>
                                <td>Replaced the instrument console</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="technician">
                    <div class="heading">
                        <h2>Technician Specialitie</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table class="visiting">
                        <thead>
                            <td>Tech ID</td>
                            <td>Name</td>
                            <td>Special In</td>
                            <td>Details</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Suraj Shrestha</td>
                                <td>Head Technician</td>
                                <td><i class="far fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ajay Chaudhary</td>
                                <td>Electronic</td>
                                <td><i class="far fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Anuj Rai</td>
                                <td>Engine</td>
                                <td><i class="far fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Roshan Thapa</td>
                                <td>Mechanical</td>
                                <td><i class="far fa-eye"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>