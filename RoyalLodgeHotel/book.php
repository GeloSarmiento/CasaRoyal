<html>
    <head>
        <title>The Royal Lodge</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
        <link href ="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
    </head>

    <body>
        <div class="box-area">
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

            <div class="banner-area">
                <table id="book-table">
                    <caption>Reserve Now!</caption>
		            <tr>
			            <th> Customer Name </th>
			            <th> Room Type </th>
	    		        <th> Guest No </th>
		    	        <th> Check In </th>
			            <th> Check Out </th>
	    		        <th colspan="2"> Payment Here </th>
		            </tr>

                    <tr>
                        <form id="form1" name="form1" method="POST" onsubmit="roompay()">
                            <td rowspan="1"><input type="text" name="txtCustomerName" id="txtCustomerName"/></td>
                            <td rowspan="1"><select name="txtRoom" id="txtRoom">
                                <option>Standard</option>
                                <option>Classic</option>
                                <option>Superior</option>
                                <option>Deluxe</option>
                                <option>Executive</option>
                            </select></td>
                            <td rowspan="1"><input type="number" name="txtGuest" id="txtGuest" min="1" value="1"/></td>
                            <td rowspan="1"><input type="date" name="txtIn" id="txtIn"  /></td>
                            <td rowspan="1"><input type="date" name="txtOut" id="txtOut"/></td>

                            <td rowspan="1"><input type="text" name="txtPayment" id="txtPayment" placeholder="Php 0.00"/></td>
                            <td rowspan="1"><input type="submit" name="bookSubmit" id="bookSubmit" value="Book Now"/></td>
                        </form>
                    </tr>
                </table>

                <table id="book-table">
                    <tr>
                    <th colspan="2"> Mode of Payment </th>
                    </tr>

                    <tr>
                    <td rowspan="1"><select name="txtRoom" id="txtRoom" required>
                        <option>GCASH</option>
                        <option>PayMaya</option>
                        <option>Credit Card</option>
                        <option>SLP</option>
                    </select></td>
                    <td rowspan="1"><input type="number" id="reg_number" name="reg_number" placeholder="Account Number" required></td>
                    </tr>
                </table>
            </div>
            
            <div class="content-area">
                <div class="wrapper">
                    
                    
                </div>

                <div id="contact-info">
                    <h3 id="contact">Contact Us</h3>
                    <i class="fas fa-map-marker-alt"> The Royal Lodge</i><br>
                    <i class="fas fa-map-marker-alt"> Cloud 9 Sky Lina Ottawa, Canada</i><br>
                    <i class="fas fa-envelope"> theroyallodgehotel.business@mail.com</i><br>
                    <i class="fas fa-phone"> 0935-354-0781 / 0922-123-6785</i>
                </div>
                <div id="socmed">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
                    <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter fa-3x"></i></a>
                    <a href="https://www.google.com/" target="_blank"><i class="fab fa-google fa-3x"></i></a>
                </div>
            </div>
        </div>
    </body>

    <script type = "text/javascript" >
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#txtIn').attr('min',today);
        var x = document.getElementById("txtIn").value;
        $('#txtOut').attr('min',today);
    </script>

<script type = "text/javascript">
        function roompay(){
			var money = document.forms["form1"]["txtPayment"].value;
			var balance = 0;
			var room = document.forms["form1"]["txtRoom"].value;

			if(room=="Standard"){
				balance = 10000;
				if (money<(balance*0.10)){ //insufficient
					insufficient();				
				}
				else{ //pasok
					alert("Submit Payment to Royal Lodge?");
					document.getElementById("form1").action="success.php";
				}
			}

			if(room=="Classic"){
				balance = 12000;
				if (money<(balance*0.10)){ //insufficient
					insufficient();				
				}
				else{ //pasok
					alert("Submit Payment to Royal Lodge?");
					document.getElementById("form1").action="success.php";
				}
			}

			if(room=="Superior"){
				balance = 15000;
				if (money<(balance*0.10)){ //insufficient
					insufficient();				
				}
				else{ //pasok
					alert("Submit Payment to Royal Lodge?");
					document.getElementById("form1").action="success.php";
				}
			}

			if(room=="Deluxe"){
				balance = 18000;
				if (money<(balance*0.10)){ //insufficient
					insufficient();				
				}
				else{ //pasok
					alert("Submit Payment to Royal Lodge?");
					document.getElementById("form1").action="success.php";
				}
			}

			if(room=="Executive"){
				balance = 20000;
				if (money<(balance*0.10)){ //insufficient
					insufficient();				
				}
				else{ //pasok
					alert("Submit Payment to Royal Lodge?");
					document.getElementById("form1").action="success.php";
				}
			}

		
            function insufficient(){
                alert ("Insufficient Payment");
            }
        }
    </script> 

</html>

