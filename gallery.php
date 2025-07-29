<?php
    include 'connection.php';
    include 'header.php';
?>

        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" data-background="images/IMG_12.jpg" data-type="parallax" data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>Gallery</h4>
                            <p>Home <a href="gallery.php">Gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Section End -->


        <!-- Projects Section Start -->
        <section class="projects-section over-layer-white parallax-bg" style="background-image:url(images/bg/px-1.jpg);"
            data-type="parallax" data-speed="5">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>Gallery</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="projects_carousel" class=" owl-carousel">
                            <div class="item">
                                <div class="projects-item">
                                    <div class="thumb">
                                        <img style="height: 270px;"
                                            src="images/jeerval3.webp"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <h1>01</h1>
                                        <h3>Kitchen Design</h3>
                                        <a class="project-btn" href="design.html">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="projects-item">
                                    <div class="thumb">
                                        <img style="height: 270px;"
                                            src="images/kichen.jpeg"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <h1>02</h1>
                                        <h3>Home Design</h3>
                                        <a class="project-btn" href="design.html">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="projects-item">
                                    <div class="thumb">
                                        <img style="height: 270px;"
                                            src="images/jeerval3.webp"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <h1>03</h1>
                                        <h3>Stairs Design</h3>
                                        <a class="project-btn" href="design.html">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="projects-item">
                                    <div class="thumb">
                                        <img style="height: 270px;"
                                            src="images/assets/bathroom.jpeg"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <h1>04</h1>
                                        <h3>Bathroom Design</h3>
                                        <a class="project-btn" href="design.html">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects Section End -->


        <?php
            include 'footer.php';
        ?>