<?php
$con = mysqli_connect("localhost","root");
if(!$con){
	echo("Can't connect!");
}
mysqli_select_db($con,"royal_lodge");
$sql = "INSERT INTO registered_sales(Customer_id,Customer_name, Room_type, Guest_no, Check_in, Check_out,Payment) VALUES ('', '$_POST[txtCustomerName]','$_POST[txtRoom]','$_POST[txtGuest]','$_POST[txtIn]','$_POST[txtOut]', '$_POST[txtPayment]')";

mysqli_query($con,$sql);
mysqli_close($con);
?>
<html>
    <head>
    <meta charset="UTF-8">
        <title>The Royal Lodge</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    </head>

    <body>
    <div class="navbar">
        <header>
            <div class="navbar">
                <div class="dropdown">
                    <button class="dropbtn"><i id ="icon" class="fas fa-user-circle"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="account.php">Account</a>
                        <a href="index.php">Sign Out</a>
                    </div>
                </div>

                <ul id="navbar-home">
                    <li><a href="about.php">About</a></li>
                    <li><a href="book.php">Book Now</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="home.php">Home</a></li>

                    <div id="hotel-title">
                        <a href="home.php"><p id = "hotel-name">The Royal Lodge</p></a>
                    </div>

                </ul>
            </div>
        </header>  

        <div class="succ">
            <img src="check.png" alt="Success" id="check">
            <h2>
                
                Booking Ref. GGWP-6452186454-RESERVATION<br>
                You have successfully booked a room with us.<br>
                Thank you for you support.<br>

            </h2>
            <form action="home.php">
                <button type = "submit" name="bookSubmit" id="bookSubmit">Home</button>
            </form>
        </div>


        <div id="contact-info-about">
            <h3 id="contact">Contact Us</h3>
            <i class="fas fa-map-marker-alt"> The Royal Lodge</i><br>
            <i class="fas fa-map-marker-alt"> Cloud 9 Sky Lina Ottawa, Canada</i><br>
            <i class="fas fa-envelope"> theroyallodgehotel.business@mail.com</i><br>
            <i class="fas fa-phone"> 0935-354-0781 / 0922-123-6785</i>
        </div>
        
        <div id="socmed-about">
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
            <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter fa-3x"></i></a>
            <a href="https://www.google.com/" target="_blank"><i class="fab fa-google fa-3x"></i></a>
        </div>
    </body>
</html>