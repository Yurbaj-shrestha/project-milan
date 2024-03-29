<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento Management</title>


    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="home.css">
</head>

<body>

    <!-- Header Section -->
    <header class="header">
        <a href="#" class="logo"><span>e</span>vento</a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#price">Price</a>
            <a href="#review">Review</a>
            <a href="#contact">Contact Us</a>
             <?php
        require './database/dbconnect.php';
        session_start();

        if (isset($_SESSION['admin_id'])) {
            $admin_id = $_SESSION['admin_id'];
            $sql = "SELECT * FROM admin WHERE id = $admin_id";
            $select = mysqli_query($conn, $sql);
            $fetch = mysqli_fetch_assoc($select);
            echo '<style>
                .header .navbar .btn {
                    margin-right:1.5rem;
                        margin-top: 1rem;
    display: inline-block;
    padding: .8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    background-color: #666;
    color: #fff;
    cursor: pointer;
    font-weight: 600;
                }
                .header .navbar .btn:hover{
    background-color: var(--main-color);
                }

            </style>';

            echo '<button class="btn" onclick="profile()">' . $fetch['username'] . '</button>';
            echo '<button class="btn" onclick="logout()">LOGOUT</button>';
        } elseif (isset($_SESSION["user_id"])) {
            $user_id = $_SESSION['user_id'];
            $select = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'");
            $fetch = mysqli_fetch_assoc($select);
            echo '<style>
                .header .navbar .btn {
                    margin-right:1.5rem;
                        margin-top: 1rem;
    display: inline-block;
    padding: .8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    background-color: #666;
    color: #fff;
    cursor: pointer;
    font-weight: 600;
                }
                .header .navbar .btn:hover{
    background-color: var(--main-color);
                }

            </style>';

            echo '<button class="btn" onclick="profile()">'. $fetch['username'] . '</button>' ;
            echo '<button  class="btn" onclick="logout()">LOGOUT</button>';
        } else {
            echo '<button class="btn" onclick="sign()">LOGIN</button>';
        }
        ?>

        </nav>

        <div id="menu-bars" class="fas fa-bars"></div>
    </header>


    <!-- Home Section -->
    <section class="home" id="home">

        <div class="content">
            <h3>Its time to celebrate! The best <span>Event Organizers</span></h3>
            <a href="#contact" class="btn">Contact us</a>
        </div>

        <div class="swiper-container home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="Images/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="Images/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="Images/3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="Images/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="Images/5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="Images/6.jpg" alt=""></div>
                <div class="swiper-slide"><img src="Images/7.jpg" alt=""></div>
                <div class="swiper-slide"><img src="Images/8.jpg" alt=""></div>
                <div class="swiper-slide"><img src="Images/9.jpg" alt=""></div>
                <div class="swiper-slide"><img src="Images/11.jpg" alt=""></div>
                <div class="swiper-slide"><img src="Images/22.jpg" alt=""></div>
                <div class="swiper-slide"><img src="Images/33.jpg" alt=""></div>
            </div>
        </div>

    </section>

    <!-- Service Section -->
    <section class="services" id="services">
        <h1 class="heading">our <span>services</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Venue Selection</h3>
                <p>Choosing the right venue is crucial for a successful event. Consider capacity, layout, and amenities
                    aligned with your event's goals. Location, budget, and flexibility are key factors, while compliance
                    with regulations and a positive reputation ensure a smooth experience. A thoughtful venue selection
                    lays the groundwork for a memorable event.</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Invitation Card</h3>
                <p>Invitation cards serve as the gateway to memorable events, encapsulating the essence of the upcoming
                    gathering. Through carefully chosen words and elegant design, they extend a personalized welcome to
                    recipients, setting the tone for the occasion. Whether it's a wedding, party, or business event,
                    invitation cards are not just pieces of paper; they are emissaries of anticipation, bridging the gap
                    between hosts and guests and creating an initial spark of excitement for the festivities that lie
                    ahead.</p>
            </div>
            <div class="box">
                <i class="fas fa-music"></i>
                <h3>Entertainment</h3>
                <p>Entertainment is a diverse realm, offering enjoyment and cultural enrichment through various forms
                    such as music, theater, movies, and more. It serves as a source of relaxation, inspiration, and
                    social connection, shaping our leisure experiences and reflecting societal trends.</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>Food and Drinks</h3>
                <p>Food and drinks are integral components of successful event management, adding a flavorful touch to
                    the overall experience. Carefully curated menus and beverage selections enhance the enjoyment of
                    attendees, creating a positive and memorable atmosphere. Whether it's a formal corporate gathering
                    or a festive celebration, the right culinary choices contribute to the event's success, satisfying
                    taste buds and fostering a sense of hospitality.</p>
            </div>
            <div class="box">
                <i class="fas fa-photo-video"></i>
                <h3>Photos and videos</h3>
                <p>Our expert photographers and videographers are committed to capturing the essence of your event. From
                    candid moments to key highlights, we aim to provide you with high-quality photos and videos that
                    serve as lasting memories. These visual mementos not only offer cherished keepsakes but also
                    valuable content for future sharing and promotions.</p>
            </div>
            <div class="box">
                <i class="fas fa-birthday-cake"></i>
                <h3>custom food</h3>
                <p>Custom foods offer a tailored culinary experience, designed to meet specific preferences and dietary
                    needs. Whether for events, individuals, or brands, this personalized approach ensures a unique and
                    memorable dining experience.</p>
            </div>
        </div>
    </section>


    <!-- gallery section -->
    <section class="gallery" id="gallery">
        <h1 class="heading">our <span>gallery</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="Images/1.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="box">
                <img src="Images/2.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="box">
                <img src="Images/3.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="box">
                <img src="Images/11.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="box">
                <img src="Images/22.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="box">
                <img src="Images/33.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="box">
                <img src="Images/9.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="box">
                <img src="Images/6.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="box">
                <img src="Images/7.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

        </div>
    </section>



    <!-- price section  -->
    <section class="price" id="price">


        <h1 class="heading">our <span>price</span></h1>

        <div class="box-container">

            <div class="box">
                <h3 class="title">for birthdays</h3>
                <h3 class="amount">$200</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li><i class="fas fa-check"></i>decoration</li>
                    <li><i class="fas fa-check"></i>music and photos</li>
                    <li><i class="fas fa-check"></i>food and drinks</li>
                    <li><i class="fas fa-check"></i>invitation cards</li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>
            <div class="box">
                <h3 class="title">for marriage</h3>
                <h3 class="amount">$1000</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li><i class="fas fa-check"></i>decoration</li>
                    <li><i class="fas fa-check"></i>music and photos</li>
                    <li><i class="fas fa-check"></i>food and drinks</li>
                    <li><i class="fas fa-check"></i>invitation cards</li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>
            <div class="box">
                <h3 class="title">for concerts</h3>
                <h3 class="amount">$500</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li><i class="fas fa-check"></i>decoration</li>
                    <li><i class="fas fa-check"></i>music and photos</li>
                    <li><i class="fas fa-check"></i>food and drinks</li>
                    <li><i class="fas fa-check"></i>invitation cards</li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>
            <div class="box">
                <h3 class="title">for others</h3>
                <h3 class="amount">$800</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li><i class="fas fa-check"></i>decoration</li>
                    <li><i class="fas fa-check"></i>music and photos</li>
                    <li><i class="fas fa-check"></i>food and drinks</li>
                    <li><i class="fas fa-check"></i>invitation cards</li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>
        </div>
    </section>



    <!-- review section -->
    <section class="review" id="review">

        <h1 class="heading">client's <span>review</span></h1>

        <div class="review-slider swiper-container">

            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="Images/person1.jpg" alt="">
                        <div class="user-info">
                            <h3>Shyam Kumar Shah</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>In conclusion, Evento exceeded our expectations. It's a comprehensive and reliable solution for
                        event organizers, and I highly recommend it to anyone looking to elevate their event planning
                        game. Kudos to the team for creating such a stellar platform!"</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="Images/person2.jpg" alt="">
                        <div class="user-info">
                            <h3>Dipendra Pathak</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>What impressed me the most was the excellent customer support. The [Event Management System Name]
                        team was responsive and helpful throughout the entire process. They went above and beyond to
                        address our queries promptly, ensuring a stress-free event planning experience.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="Images/person3.jpg" alt="">
                        <div class="user-info">
                            <h3>Yuvraj Shrestha</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>On the day of the event, the check-in functionality was flawless. The mobile app made it
                        convenient for our team to manage registrations and check-ins in real-time. It contributed to a
                        smooth and professional event experience for our attendees.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="Images/person4.jpg" alt="">
                        <div class="user-info">
                            <h3>Sanskar Joshi</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>From start to finish, the user-friendly interface made organizing my event a breeze. The
                        dashboard's intuitive design allowed me to effortlessly manage registrations, create schedules,
                        and track attendee engagement. The customization options offered a personalized touch that
                        elevated the entire event experience.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="Images/person5.jpg" alt="">
                        <div class="user-info">
                            <h3>Hari Niraula</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>One of the standout features is the robust registration system. Attendees found it easy to
                        register, and we were able to track RSVPs effortlessly. The automated confirmation emails and
                        reminders not only saved us time but also ensured a high turnout.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="Images/person6.jpg" alt="">
                        <div class="user-info">
                            <h3>Ram Prasad Sharma</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>The user interface is clean, intuitive, and user-friendly. Navigating through the various
                        features was a breeze, and it streamlined the entire planning process. The customization options
                        allowed us to tailor the event details to our specific needs, from guest lists to seating
                        arrangements.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="Images/person7.jpg" alt="">
                        <div class="user-info">
                            <h3>Sabin Baral</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>The user interface is clean, intuitive, and user-friendly. Navigating through the various
                        features was a breeze, and it streamlined the entire planning process. The customization options
                        allowed us to tailor the event details to our specific needs, from guest lists to seating
                        arrangements.</p>
                </div>
            </div>

        </div>
    </section>


    <!-- contact us section -->
    <section class="contact" id="contact">

        <h1 class="heading"><span>contact</span> us</h1>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>

            <textarea name="" placeholder="your message for us" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>
    </section>



    <!-- footer section -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>branches</h3>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Baneshwor</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Koteshwor</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Thapathali</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Patan</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Kamaladi</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"><i class="fas fa-arrow-right"></i>Home</a>
                <a href="#services"><i class="fas fa-arrow-right"></i>Services</a>
                <a href="#gallery"><i class="fas fa-arrow-right"></i>Gallery</a>
                <a href="#price"><i class="fas fa-arrow-right"></i>Price</a>
                <a href="#review"><i class="fas fa-arrow-right"></i>Review</a>
                <a href="#contact"><i class="fas fa-arrow-right"></i>Contact</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
                <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#"><i class="fas fa-envelope"></i>evento@gmail.com</a>
                <a href="#"><i class="fas fa-envelope"></i>evento.manager@gmail.com</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>NewBaneswor, Kathmandu</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i>Faceboook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
            </div>

        </div>

        <div class="credit">created by <span>Mr.Milan Rajbanshi</span> <span>Mr.Yuvraj Shrestha</span> <span>Mr.Firoj
                Raut</span> | all rights reserved</div>

    </section>
        <!-- theme toggler -->
 <div class="theme-toggler">

        <div class="toggle-btn">
            <i class="fas fa-cog"></i>
        </div>

        <h3>choose color</h3>

        <div class="buttons" >
            <div class="theme-btn" style="background: #3867d6;"></div>
            <div class="theme-btn" style="background: #f7b731;"></div>
            <div class="theme-btn" style="background: #ff0033;"></div>
            <div class="theme-btn" style="background: #20bf6b;"></div>
            <div class="theme-btn" style="background: #fa8231;"></div>
            <div class="theme-btn" style="background: #fc427b;"></div>
        </div>
    </div>





    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</script>
    <script>
        function logout()
        {
         window.location.href = "./login/logout.php";
        }
        function sign()
        {
        window.location.href = "./login/sign.php";
        }
        function profile()
        {
        window.location.href = "./profile/profile.php";
        }
    </script>
    <!-- custom js link -->
    <script src="js.js"></script>
</body>

</html>