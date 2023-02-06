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

        <section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h2>rooms</h2>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "img1.png" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Standard Room</h3>
                        
                        <p>
                            The <b>Standard Room</b> offers approximately 221 square feet of thoughtfully configured space. Each room offers a flat-panel television with cable channels and pay-per-view, one queen bed, contemporary furnishings, and an in-room safe. This room is ideal for both leisure and corporate travelers. Max. 2 guests.
                        </p>

                        <ul>
                            <li>
                                <i class="far fa-clock"></i>
                                24 hour room service
                            </li>
                            <li>
                                <i class="far fa-newspaper"></i>
                                Daily newspaper on request
                            </li>
                            <li>
                                <i class="fas fa-hand-holding-heart"></i>
                                Bathrobe, slippers, and welcome gifts like coffee and tea 
                            </li>
                        </ul>
                        
                        <p class = "rate">
                            <span>₱10,000.00 /</span> Per Night
                        </p>
                        <form action="book.php">
                            <button type = "submit" name="bookSubmit" id="bookSubmit">Book now</button>
                        </form>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "img2.png" alt = "room image">
                    </div>
                    <div class = "room-text">
                    <h3>Classic Room</h3>
                        
                        <p>
                            Enjoy approximately 280 square feet of space, expansive windows with city views, and a king-size bed in this smartly designed <b>Classic room</b>. With wi-fi and a dedicated workspace, the Beacon means business for the corporate traveler. In your downtime, visit nearby neighborhoods, restaurants, and attractions. Max. 2 guests.
                        </p>

                        <ul>
                            <li>
                                <i class="far fa-clock"></i>
                                24 hour room service
                            </li>
                            <li>
                                <i class="far fa-newspaper"></i>
                                Daily newspaper on request
                            </li>
                            <li>
                                <i class="fas fa-hand-holding-heart"></i>
                                Bathrobe, slippers, and welcome gifts like coffee and tea 
                            </li>
                        </ul>
                        
                        <p class = "rate">
                            <span>₱12,000.00 /</span> Per Night
                        </p>
                        <form action="book.php">
                            <button type = "submit" name="bookSubmit" id="bookSubmit">Book now</button>
                        </form>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "img3.png" alt = "room image">
                    </div>
                    <div class = "room-text">
                    <h3>Superior Room</h3>
                        
                        <p>
                            Enjoy our <b>Superior Room</b> with elegant 40 m² guest rooms, designed in warm beige tones and tailored to the needs of private and business travelers alike. All rooms have a large marble bathroom, a double bed, air conditioning, an additional work area with free internet access and a walk-in closet. Our superior rooms impress with a wonderful view of the city and the adjacent park.
                        </p>

                        <ul>
                            <li>
                                <i class="far fa-clock"></i>
                                24 hour room service
                            </li>
                            <li>
                                <i class="far fa-newspaper"></i>
                                Daily newspaper on request
                            </li>
                            <li>
                                <i class="fas fa-hand-holding-heart"></i>
                                Bathrobe, slippers, and welcome gifts like coffee and tea 
                            </li>
                        </ul>
                        
                        <p class = "rate">
                            <span>₱15,000.00 /</span> Per Night
                        </p>
                        <form action="book.php">
                            <button type = "submit" name="bookSubmit" id="bookSubmit">Book now</button>
                        </form>
                    </div>
                </article>

                <article class = "room">
                    <div class = "room-image">
                        <img src = "img4.png" alt = "room image">
                    </div>
                    <div class = "room-text">
                    <h3>Deluxe Room</h3>
                        
                        <p>
                            The <b>Deluxe Room</b> comprises of a Queen Size Bed, 2 Bedside Tables, a Desk & Chair. This room is furnished with wall to wall carpeting, trendy furnishings and a large private Patio equipped with Patio Furniture and Sun Beds and offers a side sea view. Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay. A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms are also available.
                        </p>

                        <ul>
                            <li>
                                <i class="far fa-clock"></i>
                                24 hour room service
                            </li>
                            <li>
                                <i class="far fa-newspaper"></i>
                                Daily newspaper on request
                            </li>
                            <li>
                                <i class="fas fa-hand-holding-heart"></i>
                                Bathrobe, slippers, and welcome gifts like coffee and tea 
                            </li>
                        </ul>
                        
                        <p class = "rate">
                            <span>₱18,000.00 /</span> Per Night
                        </p>
                        <form action="book.php">
                            <button type = "submit" name="bookSubmit" id="bookSubmit">Book now</button>
                        </form>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "img5.png" alt = "room image">
                    </div>
                    <div class = "room-text">
                    <h3>Executive Room</h3>
                        
                        <p>
                            The <b>Executive Room</b> comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony. Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay. A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.
                        </p>
                        <ul>
                            <li>
                                <i class="far fa-clock"></i>
                                24 hour room service
                            </li>
                            <li>
                                <i class="far fa-newspaper"></i>
                                Daily newspaper on request
                            </li>
                            <li>
                                <i class="fas fa-hand-holding-heart"></i>
                                Bathrobe, slippers, and welcome gifts like coffee and tea 
                            </li>
                        </ul>
                        
                        <p class = "rate">
                            <span>₱20,000.00 /</span> Per Night
                        </p>
                        <form action="book.php">
                            <button type = "submit" name="bookSubmit" id="bookSubmit">Book now</button>
                        </form>
                    </div>
                </article>
                <!-- end of single room -->
            </div>
        </section>

        

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