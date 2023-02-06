<html lang="en">
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
                <h2>RELAX AND FEEL ROYAL PEACE IN YOU.</h2>
            </div>
            
            <div class="content-area">
                <div class="wrapper">
                    <h2>What's New, My Majesty?</h2>
                    <p>The <b>Royal Lodge</b> is a modern, elegant 4-star hotel overlooking the sea, perfect for a romantic, charming vacation, in the enchanting setting of Taormina and the Ionian Sea. The rooms at the Panoramic Hotel are new, well-lit and inviting. Our reception staff will be happy to help you during your stay in Taormina, suggesting itineraries, guided visits and some good restaurants in the historic centre. While you enjoy a cocktail by the swimming pool on the rooftop terrace, you will be stunned by the breathtaking view of ...</p>
                </div>
                
                <form id="form1" name="form1" method="POST" action="about.php"> 
                    <button type="submit" id="btnMore">Learn More</button>
                </form>

                <div id="video">
                    <video id="video-pres" controls>
                    <source src="Royal Lodge.mp4" type="video/mp4">
                </div>

                <div class="testimonials">
                    <div class="inner">
                        <h1>Royal Reviews</h1>
                        <div class="border"></div>

                        <div class="row">
                        <div class="col">
                        <div class="testimonial">
                            <img src="t2.png" alt="">
                            <div class="name">Armando Alvaran</div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                                <p><i>"Great location, really pleasant and clean rooms, but the thing that makes this such a good place to stay are the staff. All of the people of <b>The Royal Lodge</b> are incredibly helpful and generous with their time and advice."</i>
                                </p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="testimonial">
                                <img src="t1.png" alt="">
                                <div class="name">Angelo Sarmiento</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>

                                <p><i>"Our stay at <b>The Royal Lodge</b> was an excellent break from winter. We stayed in an ocean front villa on the fourth floor and the views and sound from the Great Atlantic Ocean were splendid! Beyond the relaxing atmosphere of the hotel."</i>
                                </p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="testimonial">
                                <img src="t3.png" alt="">
                                <div class="name">Jennifer San Juan</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>

                                <p>"<b>The Royal Lodge... </b>Gorgeous rooms with fabulous view but the best was the staff. Our room was beyond expectations, the housekeeping staff was efficient, attentive. Selection and quality was very much appreciated."</i>
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
</html>
