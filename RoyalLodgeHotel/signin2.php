<?php
$con = mysqli_connect("localhost","root");
if(!$con){
	echo("Can't connect!");
}
mysqli_select_db($con,"royal_lodge");
$sql1 = "INSERT INTO registered_clients(Customer_id,Customer_name,Customer_address, Customer_nationality, Customer_number, Customer_email, Customer_pass, Customer_word) VALUES ('', '$_POST[reg_name]','$_POST[reg_address]','$_POST[reg_nationality]','$_POST[reg_number]','$_POST[reg_email]','$_POST[reg_pass]', '$_POST[reg_rec]')";

    if (isset($_POST['btnLogIn'])){
        $email = $_POST['signin_email'];
        $pass = $_POST['signin_pass'];

        $sql="SELECT * FROM registered_clients where Customer_email = '".$email."' and Customer_pass = '".$pass."' limit 1";
        $result=mysqli_query($con, $sql);

        if(mysqli_num_rows($result)==1){
            header("Location: home.php");
            exit();
        }
        else{
            header("Location: signin.php");
            exit();
        }
    }

mysqli_query($con,$sql1);
mysqli_close($con);
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
    </head>

    <body id="home">
        <div class = "container-navbar">
            <ul id="navbar">
                <a href="index.php"><p id = "hotel-name">The Royal Lodge</p></a>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="signin.php">Sign In</a></li>
            </ul>
        </div>

        <fieldset id = "fieldset-signin" >
            <h1>Log In</h1>
            <input type="email" id="signin_email" name="signin_email" placeholder="E-mail Address" ><br>
            <input type="password" id="signin_pass" name="signin_pass" placeholder="Password"><br>

            <form id="form1" name="form1" method="POST"> 
                <button type="submit" name="btnLogIn" id="btnLogIn">Log In</button>
            </form>

            <h4><a href="forgot.php">Forgot Password?</a></h4>
        </fieldset>
    
        <div class = "home-title">
            <p id="logo-name">The<br><span id="span-royal">Royal</span><br>Lodge<br> </p>
            <h2 id="home-quote">RELAX AND FEEL ROYAL PEACE IN YOU.</h2>
        </div>

    </body>
</html>
