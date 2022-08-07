<?php
if(isset($_POST["gInsert"])){
    
    include 'conn.php';

    //if (!$con){
        //die("connection to this database failed due to". 
        //mysqli_connect_error());
    //}
    // echo "Success connecting to the db";

    $firstname = $_POST['firstname1'];
    $lastname= $_POST['lastname1'];
    $email= $_POST['email1'];
    $contact= $_POST['contact1'];
    $messages= $_POST['messages1'];
    $sql = "INSERT INTO `guest_profile` (`g_first_name`, `g_last_name`, `g_email`, `g_contact`, `g_messages`) VALUES ('$firstname', '$lastname', '$email', '$contact', '$messages')";
    // echo $firstname; 

    if($conn->query($sql) == true){
        echo "Successfully inserted";
    
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
      
    }
    $conn->close();
}
?>
<html>
    <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Website Design </title>
<link rel="stylesheet" href="contact11.css">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@1,100;1,300;1,600;1,900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.cssq">
</head>
<body>
<div class="CONTACTUS"> 
        <div class="title">
            <h1>CONTACT US</h1>
        </div>
        <div class="box">
            <!--Form box-->

            <div class="contact form">
            <h3> Send a Message</h3>
            <form method="post" action="">
                <div class="formBox"> 
                    <div class="row50">
                        <div class="inputBox">
                            <span>First Name</span>  
                            <input type="text" placeholder="Enter Your First Name" name="firstname1">
                        </div>
                        <div class="inputBox">
                            <span>Last Name</span>  
                            <input type="type" placeholder="Enter Your Last Name" name="lastname1">
                        </div>
                    </div>
                    <div class="row50">
                        <div class="inputBox">
                            <span>Email</span>  
                            <input type="type" placeholder="Enter Your Email" name="email1">
                        </div>
                        <div class="inputBox">
                            <span>Mobile Number</span>  
                            <input type="type" placeholder="Enter Your Number" name="contact1">
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBox">
                            <span>Message</span>  
                            <textarea placeholder="Enter Your Messages here." name="messages1"></textarea>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBox">
                           <input  class="hero-btn red-btn" type="submit" name="gInsert" value="Send">
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBox">
                            <a href="contact.php" class="hero-btn red-btn"> Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--Info box-->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                <div>
                <span><ion-icon name="location"></ion-icon></span>
                <p>Balaju-16, Kathmandu <br> Nepal</p>
            </div>
            <div>
                <span><ion-icon name="mail"></ion-icon></span>
                <a href="mailto:loremipsum@email.com">mechabot@infomakeuniq.np</a>
            </div>
            <div>
                <span><ion-icon name="call"></ion-icon></span>
                <a href="tel:+977 9811111111">+977 012345678/ 9841234567</a>
            </div>

            <!--Social Media Link-->
            <ul class="sci">
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            </ul>
        </div>
     </div>
       
    

        <!--Map box-->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14126.44914637248!2d85.28812856266508!3d27.729254759531045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19d1b5d94541%3A0x57f7930ecd396228!2sRoyal%20Enfield%20Service%20Center-%20Vivek%20Automobiles%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1650433461545!5m2!1sen!2snp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

       




</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>
<html>