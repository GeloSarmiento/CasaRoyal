<?php session_start();?>
<?php
	$con = mysqli_connect("localhost","root");
	if(!$con){
		echo("Can't connect!");
	}
	$sample = $_SESSION['CID'];
	mysqli_select_db($con,"royal_lodge");
	$result = mysqli_query($con,"SELECT * FROM registered_clients WHERE Customer_id = $sample ");
	$row = mysqli_fetch_array($result);
	$temp1 = $row['Customer_id'];
	$temp2 = $row['Customer_name'];
	$temp3 = $row['Customer_address'];
	$temp4 = $row['Customer_nationality'];
	$temp5 = $row['Customer_number'];
	$temp6 = $row['Customer_email'];
	$temp7 = $row['Customer_pass'];
	$temp8 = $row['Customer_word'];
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
                    <button class="dropbtn">Account
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
        <div id ="customer_info">
            <table id="table-admin">
                <caption>Your Royal Information</caption>
                <tr>
                    <th>
                        Customer ID:
                    </th><br>
                    <td>
                        <?php echo $temp1;?>
                    </td>
                </tr>
                
                <tr>
                    <th>
                        Customer Name:
                    </th><br>
                    <td>
                        <?php echo $temp2;?>
                    </td>
                </tr>  

                <tr>
                    <th>
                        Customer Address:
                    </th><br>
                    <td>
                        <?php echo $temp3;?>
                    </td>
                </tr>  

                <tr>
                    <th>
                        Customer Nationality:
                    </th><br>
                    <td>
                        <?php echo $temp4;?>
                    </td>
                </tr>  

                <tr>
                    <th>
                        Customer Number:
                    </th><br>
                    <td>
                        <?php echo $temp5;?>
                    </td>
                </tr>  

                <tr>
                    <th>
                        Customer Email:
                    </th><br>
                    <td>
                        <?php echo $temp6;?>
                    </td>
                </tr>  

                <tr>
                    <th>
                        Customer Password:
                    </th><br>
                    <td>
                        <?php echo $temp7;?>
                    </td>
                </tr>  

                <tr>
                    <th>
                        Customer Recovery Word:
                    </th><br>
                    <td>
                        <?php echo $temp8;?>
                    </td>
                </tr>  
                
            </table>
            <form action="signin.php">
                <button type = "submit" name="bookSignout" id="bookSignout">Sign Out</button>
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

