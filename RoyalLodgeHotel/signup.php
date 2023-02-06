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

        <fieldset id = "fieldset-signup" >
            <form id="form1" name="form1" method="POST" action="signin2.php"> 
                <h1>Sign Up</h1>
                <input type="text" id="reg_name" name="reg_name" placeholder="Full Name"><br>
                <input type="text" id="reg_address" name="reg_address" placeholder="Full Address"><br>
                <input type="text" id="reg_nationality" name="reg_nationality" placeholder="Nationality" ><br>
                <input type="number" id="reg_number" name="reg_number" placeholder="Phone Number" ><br><br>
                
                <input type="email" id="reg_email" name="reg_email" placeholder="E-mail Address" ><br>
                <input type="password" id="reg_pass" name="reg_pass" placeholder="Password" ><br>
                <input type="password" id="reg_cpass" name="reg_cpass" placeholder="Confirm Password" ><br>
                <input type="password" id="reg_rec" name="reg_rec" placeholder="Recovery Word"><br>
                <p id = "rec-note">*recovery word is use incase you forgot your password</p>

                <button type="submit" id="btnLogIn">Sign Up</button>
            </form>
        </fieldset>
    
        <div class = "home-title">
            <p id="logo-name">The<br><span id="span-royal">Royal</span><br>Lodge<br> </p>
            <h2 id="home-quote">RELAX AND FEEL ROYAL PEACE IN YOU.</h2>
        </div>

    </body>
</html>