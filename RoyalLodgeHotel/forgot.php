<?php
    $con=mysqli_connect("localhost","root");
    if(!$con){
        echo("Can't connect!");
    }
    mysqli_select_db($con,"royal_lodge");

    if (isset($_POST['btnCont'])){
        $email = $_POST['signin_email'];
        $rec = $_POST['signin_rec'];

        $sql="SELECT * FROM registered_clients where Customer_email = '".$email."' and Customer_word = '".$rec."' limit 1";
        $result=mysqli_query($con, $sql);

        if(mysqli_num_rows($result)==1){
            header("Location: home.php");
            exit();
        }
        else{
            header("Location: forgot.php");
            exit();
        }
    }
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
            <h1>Forgot Password</h1>
            <form id="form1" name="form1" method="POST"> 
                <input type="email" id="signin_email" name="signin_email" placeholder="E-mail Address" ><br>
                <input type="password" id="signin_rec" name="signin_rec" placeholder="Recovery Word" ><br>
                <button type="submit" id="btnCont" name="btnCont">Continue</button>
            </form>
        </fieldset>
    

        <div class = "home-title">
            <p id="logo-name">The<br><span id="span-royal">Royal</span><br>Lodge<br> </p>
            <h2 id="home-quote">RELAX AND FEEL ROYAL PEACE IN YOU.</h2>
        </div>

    </body>
</html>