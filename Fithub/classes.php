<?php include "./includes/header.php" ?>


<br><br>
<br>
    <!--Classes Start-->
    <section class="main-classes-in">
        <div class="container">
            <div class="row" id="counter">
                <?php foreach($classes as $i): ?>
                    <div class="col-lg-4 col-md-6">
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

    <br><br>
    <br><br>
    <?php include "./components/trainers.php" ?> <!-- Trainers -->    
    <?php include "./components/pricing.php" ?> <!-- Pricing -->
    <?php include "./components/portfolio.php" ?> <!-- Pricing -->
    <?php include "./components/downloadApp.php" ?> <!-- downloadApp -->
    <?php include "./components/appointmentForm.php" ?> <!-- Appointment -->


    <?php include "./includes/footer.php" ?> <!-- Footer -->
