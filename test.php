
<?php
if(isset($_POST["gInsert"])){
    
    include 'conn.php';

    //if (!$con){
        //die("connection to this database failed due to". 
        //mysqli_connect_error());
    //}
    // echo "Success connecting to the db";

    $firstname = $_Post['firstname1'];
    $lastname= $_Post['lastname1'];
    $email= $_Post['email1'];
    $contact= $_Post['contact1'];
    $messages= $_Post['messages1'];
    $sql = "INSERT INTO `guest_profile` (`g_first_name`, `g_last_name`, `g_email`, `g_contact`, `g_messages`) VALUES ('$firstname', '$lastname', '$email', '$contact', '$messages')";
        echo "hello";
    echo $firstname; 

    // if($conn->query($sql) == true){
    //     echo "Successfully inserted";
    //     echo $sql;
    // }
    // else{
    //     echo "ERROR: $sql <br> $conn->error";
    //     echo $sql;
    // }
    //$conn->close();
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



</body>
<html>