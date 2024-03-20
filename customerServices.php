<style>
    .row {
        justify-content: center !important;
    }

    div#frameInfobox {
        padding: 0 !important;
        margin-bottom: 20px !important;
    }
    .cta {
        background: rgba(0, 0, 0, 0.6) /* Black color with 60% opacity */
            url("assets/img/customer-service.jpg") /* Path to the background image */
            fixed /* Fixed background attachment */
            center center; /* Background position at the center of both axes */
        background-size: cover;
        padding: 120px 0;
    }
</style>
<?php include 'header.php' ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Inquiry</li>
            </ol>
            <h2>Inquiry</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="section-title">
                <h2>Talk To Us</h2>
                <p>Any faulty, broken services or dissatisfactory can be reported here.</p>
            </div>
            <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box" id="frameInfobox">
                                    <div class="col-lg-12 ">
                                        <iframe src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=19-2, Inspire Consultancy_my, Plaza Danau 2, Jalan 109F, Taman Danau Desa, 58100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 434px;" allowfullscreen=""><a href="https://www.gps.ie/">gps systems</a></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>19-2, Plaza Danau 2, Jalan 109F, Taman Danau Desa, 58100 Kuala Lumpur,<br>Wilayah Persekutuan Kuala Lumpur</p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="info-box mt-4">
                                    <i class="bx bx-time-five"></i>
                                    <h3>Operating Hours</h3>
                                    <p>9.30AM - 5.00PM</p>
                                   
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-12">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="Contact" placeholder="Contact" required="">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->

<?php include 'footer.php' ?>