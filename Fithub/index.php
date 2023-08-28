<?php include "./includes/header.php" ?>

    <!--Banner Start-->
    <section class="main-banner-two">
        <div class="banner-two-circle-one"></div>
        <div class="banner-two-circle-two"></div>
        <div class="banner-two-circle-three"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-title-two">
                         <h1 class="h1-title wow fadeInUp" data-wow-delay=".7s">Shape Your Ideal <span>Body Fit</span></h1>
                        <p class="wow fadeInUp" data-wow-delay=".9s">Duis mollis felis quis libero dictum vehicula. Duis dictum lorem mi, a faucibus nisi eleifend eu.</p>
                        <div class="banner-btn-two wow fadeInUp" data-wow-delay="1s">
                            <a href="about-us.php" class="sec-btn wow fadeInUp" data-wow-delay="1s">Get Started</a>
                            <span class="banner-play-btn popup-youtube"><i class="fa fa-play" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-banner-img-two wow fadeInRight" data-wow-delay=".5s">
                        <img src="assets/images/banner-img-2.png" alt="Banner">
                        <div class="banner-img-circle-two animate-this">
                            <img src="assets/images/banner-img-circle-bg.png" alt="Circle">
                        </div>
                        <div class="heart-rate-two">
                            <div class="heart-icon">
                                <img src="assets/images/heart-rate-2.png" alt="Heart Rate">
                            </div>
                            <div class="heart-text">
                                <span>Heart Rate</span>
                                <h3>100 bpm</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner End-->

<?php include "./components/services.php" ?> <!-- services -->

    <!--About Us Start-->
    <section class="main-about-us-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-two wow fadeInLeft" data-wow-delay=".5s">
                        <img src="assets/images/about-img-two.png" alt="About Us">
                        <div class="about-img-bg-circle-two"></div>
                        <div class="about-client">
                            <div class="about-client-content">
                                <span>150k+ Clients</span>
                                <img src="assets/images/about-client.png" alt="Clients">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-box two wow fadeInRight" data-wow-delay=".5s">
                        <div class="about-us-title">
                            <div class="subtitle">
                                <h2 class="h2-subtitle">About Us</h2>
                            </div>
                            <h2 class="h2-title">Welcome To Our Fitness Gym</h2>
                        </div>
                        <p>Nam ut hendrerit leo. Aenean vel ipsum nunc. Curabitur in tellus vitae nisi aliquet dapibus non et erat. Pellentesque porta sapien non accumsan dignissim curabitur sagittis nulla sit amet dolor feugiat.</p>
                        <div class="points">
                            <ul>
                                <li>
                                    <div class="point-object"></div><p>Morbi sed massa scelerisque, porta dui vel, finibus nulla. Etiam accumsan, eros quis rhoncus interdum.</p>
                                </li>
                                <li>
                                    <div class="point-object"></div><p>Sed posuere purus eget pharetra commodo. Pellentesque consectetur quam in neque dignissim tincidunt.</p>
                                </li>
                                <li>
                                    <div class="point-object"></div><p>Nulla faucibus mi a lectus interdum tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </li>
                            </ul>
                        </div>
                        <a href="about-us.php" class="sec-btn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Us End-->

    <?php include "./components/portfolio.php" ?> <!-- Portfolio -->


    <!--Classes Start-->
    <section class="main-classes-two">
        <div class="sec-circle-one"></div>
        <div class="sec-circle-two"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="classes-title two">
                        <div class="subtitle">
                            <h2 class="h2-subtitle">Our Classes</h2>
                        </div>
                        <h2 class="h2-title">Fitness Classes For Every Goal</h2>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row class-slider" id="counter">
            <?php foreach($classes as $i): ?>
                    <div class="col-lg-4">
                        <div class="class-box wow fadeInUp" data-wow-delay=".5s">
                            <div class="class-img">
                                <img src="assets/images/<?php echo $i['img1'] ?>" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="assets/images/<?php echo $i['img2'] ?>" alt="Icon">
                                    </div>
                                    <a href="class-detail.html"><h3 class="h3-title"><?php echo $i['title'] ?></h3></a>
                                </div>
                                <p><?php echo $i['desc'] ?></p>
                                <div class="class-full" id="progress_bar">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title" style="opacity: 0;"><?php  echo $i['capacity'] ?></h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="85">0</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="<?php echo $i['percent'] ?>">
                                            <div class="skill-bar-inner class-bar-in"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--Classes End-->

    <!--Schedule Start-->
    <section class="main-schedule">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="schedule-title">
                        <div class="subtitle">
                            <h2 class="h2-subtitle">Our Schedule</h2>
                        </div>
                        <h2 class="h2-title">Check Our  Classes Schedule</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="main-schedule-box wow fadeInUp" data-wow-delay=".5s">
                        <div class="schedule-box">
                            <div class="schedule-time-box">
                                <ul>
                                    <li><img src="assets/images/clock-1.png" alt="Clock"></li>
                                    <li><h3 class="h3-title">8:00 Am</h3></li>
                                    <li><h3 class="h3-title">10:00 Am</h3></li>
                                    <li><h3 class="h3-title">12:00 Pm</h3></li>
                                    <li><h3 class="h3-title">5:00 Pm</h3></li>
                                    <li><h3 class="h3-title">8:00 Pm</h3></li>
                                </ul>
                            </div>
                            <div class="schedule-class-box">
                                <ul>
                                    <li><h3 class="h3-title">Monday</h3></li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Weight Lifting</h3>
                                        <span>Desert Antony</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Cardio</h3>
                                        <span>Kate Johnson</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Boxing</h3>
                                        <span>John Hard</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Power Yoga</h3>
                                        <span>Zahra Sharif</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Zumba Dance</h3>
                                        <span>Steven Hill</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="schedule-class-box">
                                <ul>
                                    <li><h3 class="h3-title">Tuesday</h3></li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Aerobics</h3>
                                        <span>Manny Johnes</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Power Yoga</h3>
                                        <span>Zahra Sharif</span>
                                        </div>
                                    </li>
                                    <li></li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Weight Lifting</h3>
                                        <span>Desert Antony</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Boxing</h3>
                                        <span>John Hard</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="schedule-class-box">
                                <ul>
                                    <li><h3 class="h3-title">Wednesday</h3></li>
                                    <li></li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Weight Lifting</h3>
                                        <span>Desert Antony</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Cardio</h3>
                                        <span>Kate Johnson</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Zumba Dance</h3>
                                        <span>Zahra Sharif</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Power Yoga</h3>
                                        <span>Zahra Sharif</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="schedule-class-box">
                                <ul>
                                    <li><h3 class="h3-title">Thursday</h3></li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Power Yoga</h3>
                                        <span>Zahra Sharif</span>
                                        </div>
                                    </li>
                                    <li></li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Aerobics</h3>
                                        <span>Manny Johnes</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Boxing</h3>
                                        <span>John Hard</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Weight Lifting</h3>
                                        <span>Desert Antony</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="schedule-class-box">
                                <ul>
                                    <li><h3 class="h3-title">Friday</h3></li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Cardio</h3>
                                        <span>Kate Johnson</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Aerobics</h3>
                                        <span>Manny Johnes</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Weight Lifting</h3>
                                        <span>Desert Antony</span>
                                        </div>
                                    </li>
                                    <li></li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Boxing</h3>
                                        <span>John Hard</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="schedule-class-box">
                                <ul>
                                    <li><h3 class="h3-title">Saturday</h3></li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Boxing</h3>
                                        <span>John Hard</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Power Yoga</h3>
                                        <span>Zahra Sharif</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Cardio</h3>
                                        <span>Kate Johnson</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="schedule-class-text">
                                        <h3 class="h3-title">Aerobics</h3>
                                        <span>Manny Johnes</span>
                                        </div>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Schedule End-->

    <?php include "./components/downloadApp.php" ?> <!-- downloadApp -->
    <?php include "./components/trainers.php" ?> <!-- Trainers -->
    <?php include "./components/pricing.php" ?> <!-- Pricing -->
    <?php include "./components/appointmentForm.php" ?> <!-- Appointment -->


     <!--Counter Start-->
     <section class="main-counter">
        <div class="container">
            <div class="row counter-bg wow fadeInUp" data-wow-delay=".5s">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <h2 class="h2-title counting-data" data-count="874">0</h2>
                            <div class="counter-text">
                                <img src="assets/images/happy-client.png" alt="Happy Client">
                                <span>Happy Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <h2 class="h2-title counting-data" data-count="987">0</h2>
                            <div class="counter-text">
                                <img src="assets/images/total-clients.png" alt="Total Clients">
                                <span>Total Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <h2 class="h2-title counting-data" data-count="587">0</h2>
                            <div class="counter-text">
                                <img src="assets/images/gym-equipment.png" alt="Gym Equipment">
                                <span>Gym Equipment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <h2 class="h2-title counting-data" data-count="748">0</h2>
                            <div class="counter-text">
                                <img src="assets/images/cup-of-coffee.png" alt="Cup Of Coffee">
                                <span>Cup Of Coffee</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter End-->

    <?php include "./components/testimonials.php" ?> <!-- testimonials -->


<?php include "./includes/footer.php" ?>
