<?php
include("header.php");
?>

<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
        <h1> .TutorEase. </h1>
        <h2> Empowering Education, One Click at a Time... </h2>
        <a href="aboutus.php" class="btn-get-started scrollto">Get Started</a>
    </div>
</section>

<main id="main">

    <section id="clients" class="clients">
        <div class="container">

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/img/clients/img1.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/clients/img2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
                    <img src="assets/img/clients/client-3.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
                    <img src="assets/img/clients/client-4.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
                    <img src="assets/img/clients/img3.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
                    <img src="assets/img/clients/client-6.jpeg" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section>

    <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="img/about_img.jpg" style="width: 70%;">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200"><br><br>
                    <p class="font-italic"><b>Vision :</b> Revolutionizing Education through Seamless Expertise Access. 
                    Bridging Knowledge Seekers and Tutors Effortlessly. Igniting Minds, Transforming Futures. 
                    Empowering Learning Journeys with Unparalleled Convenience. Your Pathway to Enriched Learning 
                    Experiences.</p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Effortless access to experienced tutors for seamless learning support.</li>
                        <li><i class="ri-check-double-line"></i> Flexibility in scheduling to accommodate busy student routines.</li>
                        <li><i class="ri-check-double-line"></i> Boosting confidence through improved understanding and problem-solving skills.</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section id="counts" class="counts">
    <div class="container">
        <div class="row counters d-flex flex-column align-items-center">
            <div class="col-lg-3 col-4 text-center">
                <span data-toggle="counter-up">
                    <?php
                        $sql = "select * from article";
                        $qsql = mysqli_query($con,$sql);
                        echo mysqli_num_rows($qsql);
                    ?>
                </span>
                <p>Records of Articles</p>
            </div>
        </div>
    </div>
</section>
</main>

<?php
    include("footer.php");
?>