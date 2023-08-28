
    <!--Portfolio Start-->
    <div class="main-portfolio-in">
        <div class="container-fluid">
            <div class="row portfolio-slider">
            <?php foreach($porfolioClass as $i): ?>
                <div class="col-lg-4">
                    <div class="portfolio-box wow fadeInUp" data-wow-delay=".5s">
                        <img src="assets/images/<?php echo $i['img'] ?>" alt="Portfolio">
                        <div class="portfolio-content">
                            <span><?php echo $i['title'] ?></span>
                            <h3 class="h3-title"><?php echo $i['desc'] ?></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!--Portfolio End-->