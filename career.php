<style>

</style>

  <?php include 'footer.php' ?>

        <main id="main">
            <section id="cta" class="cta">
                <div class="container">

                    <div class="text-center">
                        <h1 id="ctaTitle">Business Inquiry</h1>

                    </div>

                </div>
            </section><!-- End Cta Section -->
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
                <div class="container">

                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Business Inquiry</li>
                    </ol>


                </div>
            </section><!-- End Breadcrumbs -->

             <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="row" data-aos="fade-up" data-aos-delay="100">

                        <div class="col-lg-6">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="info-box">
                                        <i class="bx bx-phone-call"></i>
                                        <h3>Call Us</h3>
                                        <p>+60312345678</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-box mt-4">
                                        <i class="bx bx-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>terminalgombak@tbg.com.my</p>
                                    </div>
                                </div>
                                
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="subject" id="subject" required>
                                        
                                        <option selected="">Select</option>
                                        <option>Retail Opportunity</option>
                                        <option>Event Booking</option>
                                        <option>Promotion Inquiry</option>
                                        <option>Leasing</option>
                                        <option>Individual Store</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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
            </section><!-- End Contact Section -->
           
        </main><!-- End #main -->

  <?php include 'footer.php' ?>