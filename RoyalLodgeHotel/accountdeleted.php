<?php
$con = mysqli_connect("localhost","root");
if(!$con){
	echo("Can't connect!");
}
mysqli_select_db($con,"royal_lodge");
$temp = $_POST['txtCustID'];
$sql = ("DELETE FROM registered_accounts where Customer_id = '$temp'");
mysqli_query($con,$sql);
mysqli_close($con);
?>