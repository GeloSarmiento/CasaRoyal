<?php
$con = mysqli_connect("localhost","root");
if(!$con){
	echo("Can't connect!");
}
mysqli_select_db($con,"royal_lodge");
$temp1 = $_POST['txtCustID'];
$temp2 = $_POST['txtNewGuest'];
$sql = ("UPDATE registered_sales set Guest_no = '$temp2' where Customer_id = '$temp1'");
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
<div class="navbar">
        <header>
            <div class="navbar">

                <ul id="navbar-home">

                    <div id="hotel-title">
                        <a href="home.php"><p id = "hotel-name">The Royal Lodge</p></a>
                    </div>

                </ul>
            </div>
        </header>  

<div id="admin-add">
<table id="book-table">
<div id = "note">
					<h2 id ="note1">
						Welcome Admin!
					</h2>
				</div>
				<caption>Reserve Walk-Ins</caption>
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
				<div>
					<h2 id="note2">
						Admin Settings
					</h2>
					<h3 id ="note3">
						Registered Clients
					</h3>
				</div>
</div>

<?php
$con = mysqli_connect("localhost","root");
if(!$con){
	echo("Can't connect!");
}
mysqli_select_db($con,"royal_lodge");
$result = mysqli_query($con,"SELECT * FROM registered_clients");
echo "<table border = '1' id='table-admin'><tr>";
echo "<th> Customer ID </th>";
echo "<th> Customer Name </th>";
echo "<th> Customer Address </th>";
echo "<th> Nationality </th>";
echo "<th> Phone Number </th>";
echo "<th> Email Address </th>";
echo "<th> Password </th>";
echo "<th> Recovery Word </th></tr>";
while($row = mysqli_fetch_array($result)){
    $temp1 = $row['Customer_id'];
	$temp2 = $row['Customer_name'];
	$temp3 = $row['Customer_address'];
    $temp4 = $row['Customer_nationality'];
    $temp5 = $row['Customer_number'];
    $temp6 = $row['Customer_email'];
    $temp7 = $row['Customer_pass'];
	$temp8 = $row['Customer_word'];
	echo "<tr><td> $temp1 </td>";
	echo "<td> $temp2 </td>";
    echo "<td> $temp3 </td>";
    echo "<td> $temp4 </td>";
    echo "<td> $temp5 </td>";
    echo "<td> $temp6 </td>";
    echo "<td> $temp7 </td>";
	echo "<td> $temp8 </td></tr>";
}
	echo"</table>";
?>
<div class="ac">
		<div class="div" style="margin-right:18em; display: inline; float: right">
			<form id="form1" name="form1" method="POST" action="accountdelete.php">
				<h3>Delete Account</h3>
				Customer ID: <input type="text" name="txtCustID" id="txtCustID"/><br>
				<input type="submit" name="bookSubmit" id="bookSubmit" value="Delete"/>
			</form>
		</div>

		<div class="div" style="padding-left:20em;">
			<form id="form1" name="form1" method="POST" action="accountblock.php">
				<h3>Block Account</h3>
				Customer ID: <input type="text" name="txtCustID" id="txtCustID"/> </br>
				New Password: <input type="text" name="txtNewPass" id="txtNewPass"/><br>
				<input type="submit" name="bookSubmit" id="bookSubmit" value="Block Account"/>
			</form>
		</div>
	</div>
		<h3 id ="note3">
			Sales
		</h3>
</body>
<?php
$result = mysqli_query($con,"SELECT * FROM registered_sales");
echo "<table border = '1' id='table-admin'><tr>";
echo "<th> Customer ID </th>";
echo "<th> Customer Name </th>";
echo "<th> Room Type </th>";
echo "<th> Guest No. </th>";
echo "<th> Check-In Date </th>";
echo "<th> Check-Out Date </th>";
echo "<th> Payment</th></tr>";
while($row = mysqli_fetch_array($result)){
    $temp1 = $row['Customer_id'];
	$temp2 = $row['Customer_name'];
	$temp3 = $row['Room_type'];
    $temp4 = $row['Guest_no'];
    $temp5 = $row['Check_in'];
    $temp6 = $row['Check_out'];
    $temp7 = $row['Payment'];
	echo "<tr><td> $temp1 </td>";
	echo "<td> $temp2 </td>";
    echo "<td> $temp3 </td>";
    echo "<td> $temp4 </td>";
    echo "<td> $temp5 </td>";
    echo "<td> $temp6 </td>";
    echo "<td> $temp7 </td></tr>";
}
mysqli_close($con);
	echo"</table>";
?>

	<div class="ac">
		<div class="div" style="margin-right:18em; display: inline; float: right">
			<form id="form1" name="form1" method="POST" action="reservationdeleted.php">
				<h3>Cancel Reservation</h3>
				Customer ID: <input type="text" name="txtCustID" id="txtCustID"/><br>
				<input type="submit" name="bookSubmit" id="bookSubmit" value="Cancel Reservation"/>
			</form>
		</div>

		<div class="div" style="padding-left:20em;">
			<form id="form1" name="form1" method="POST" action="reservationupdated.php">
				<h3>Update Guest Number</h3>
				Customer ID: <input type="text" name="txtCustID" id="txtCustID" /> </br>
				New Guest No: <input type="text" name="txtNewGuest" id="txtNewGuest"/><br>
				<input type="submit" name="bookSubmit" id="bookSubmit" value="Update Record"/>
			</form>
		</div>
	</div>
</body>
<script type = "text/javascript">
        function roompay(){
			var money = document.forms["form1"]["txtPayment"].value;
			var balance = 0;
			var room = document.forms["form1"]["txtRoom"].value;

			if(room=="Standard"){
				balance = 10000;
				if (money<balance){ //insufficient
					insufficient();				
				}
				else{ //pasok
					alert("Submit Payment to Royal Lodge?");
					document.getElementById("form1").action="success2.php";
				}
			}

			if(room=="Classic"){
				balance = 12000;
				if (money<balance){ //insufficient
					insufficient();				
				}
				else{ //pasok
					alert("Submit Payment to Royal Lodge?");
					document.getElementById("form1").action="success2.php";
				}
			}

			if(room=="Superior"){
				balance = 15000;
				if (money<balance){ //insufficient
					insufficient();				
				}
				else{ //pasok
					alert("Submit Payment to Royal Lodge?");
					document.getElementById("form1").action="success2.php";
				}
			}

			if(room=="Deluxe"){
				balance = 18000;
				if (money<balance){ //insufficient
					insufficient();				
				}
				else{ //pasok
					alert("Submit Payment to Royal Lodge?");
					document.getElementById("form1").action="success2.php";
				}
			}

			if(room=="Executive"){
				balance = 20000;
				if (money<balance){ //insufficient
					insufficient();				
				}
				else{ //pasok
					alert("Submit Payment to Royal Lodge?");
					document.getElementById("form1").action="success2.php";
				}
			}

		
            function insufficient(){
                alert ("Insufficient Payment");
            }
        }
    </script> 


</html>
