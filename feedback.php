       <?php include 'header.php'?>

        <main id="main">
           
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
                <div class="container">

                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Feedback</li>
                    </ol>
                    <h2>Feedback</h2>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Leave Your Feedback Here</h2>
                        <p>"Your feedback is invaluable in helping us provide better service. Thank you!"</p>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="100">


                        <div class="col-lg-12">
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
                                    <input type="text" class="form-control" name="subject" id="Contact" placeholder="Contact" required>
                                   
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

       <?php include 'footer.php'?>