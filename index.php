
<!DOCTYPE html>
<style>
    
    .testimonial-wrap {
    position: relative;
    display: inline-block; /* Allows the overlay to cover the image */
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Dark overlay */
    opacity: 0; /* Initially invisible */
    transition: opacity 0.3s ease; /* Smooth transition for opacity */
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction:column;
    
}

.testimonial-wrap:hover .overlay {
    opacity: 1; /* Show overlay on hover */
}

.overlay p {
    color: white; /* Text color */
    font-size: 18px; /* Adjust font size as needed */
    text-align: center; /* Center align text */
}
h2#locationName {
    color: white;
    text-align: center;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

img#touristImage {
    max-width: 100%;
    height: 300px !important;
}
</style>
<?php include 'header.php'; ?>

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container" data-aos="zoom-out" data-aos-delay="100">
                <div class="row">
                    <div class="col-xl-6">
                        <h1>Medical Ease,<br>Insurance Peace,<br> Inspire Consultancy<br> - Your Release</h1>
                        <h2>Insurance solutions tailored, your worries disappear</h2>
<!--                        <a href="" target="_blank" class="btn-get-started scrollto"></a>-->
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients">
                <div class="container" data-aos="zoom-in">

                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Clients Section -->


 <!-- ======= Hero Section ======= -->
            <section class="d-flex align-items-center">

                <div class="container" data-aos="zoom-out" data-aos-delay="100">

                    <iframe id="ytplayer" type="text/html" width="100%" height="650px" src="https://www.youtube.com/embed/qtx6x7HnwL8?autoplay=1&mute=1&enablejsapi=1&showinfo=0&control=0&rel=0" frameborder="0"></iframe>
                </div>

            </section><!-- End Hero -->
<section id="counts" class="counts">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0" class="purecounter">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0" class="purecounter">521</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="0" class="purecounter">1463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0" class="purecounter">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section>
            <section id="testimonials" class="testimonials">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Discovering Our Malaysia</h2>
                        <p></p>
                    </div>

                    <div class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-backface-hidden aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper" id="swiper-wrapper-b6eaeeed1261aec0" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2868px, 0px, 0px); transition-delay: 0ms;">

                            <!-- End testimonial item -->

                            <!-- End testimonial item -->

                            <!-- End testimonial item -->

                            <!-- End testimonial item -->

                            <!-- End testimonial item -->

                            <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/KL-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">KLCC</h2>
                                        <p>Kuala Lumpur</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/sabah-1.png" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Mount Kinabalu</h2>
                                        <p>Sabah</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/labuan-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Papan Island</h2>
                                        <p>Labuan</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/perlis-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Kuala Perlis</h2>
                                        <p>Perlis</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/perak-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Leaning Clock Tower</h2>
                                        <p>Perak</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/melaka-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Stadthuys</h2>
                                        <p>Melaka</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/NS-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Mosque of Sri Sendayan</h2>
                                        <p>Negeri Sembilan</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/kelantan-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Wau Making</h2>
                                        <p>Kelantan</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/kedah-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Sedim River</h2>
                                        <p>Kedah</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/pahang-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Cameron Highlands</h2>
                                        <p>Pahang</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/Johor-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Mosque of Sultan Abu Bakar</h2>
                                        <p>Johor</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/selangor-1.png" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Chilling River</h2>
                                        <p>Selangor</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/sarawak-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Bako</h2>
                                        <p>Sarawak</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/terengganu-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Redang Island</h2>
                                        <p>Terengganu</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/penang-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">ESCAPE</h2>
                                        <p>Penang</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/KL-2.png" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Batu Cave</h2>
                                        <p>Kuala Lumpur</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/sabah-2.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Semporna</h2>
                                        <p>Sabah</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/labuan-2.png" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Sikh Temple</h2>
                                        <p>Labuan</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/perlis-2.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Mosque of Al Hussain</h2>
                                        <p>Perlis</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/perak-2.png" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Tempurung Cave</h2>
                                        <p>Perak</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/melaka-2.png" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">ST PAUL HILL</h2>
                                        <p>Melaka</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/NS-2.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Port Dickson</h2>
                                        <p>Negeri Sembilan</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/kelantan-2.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Sitting Buddha</h2>
                                        <p>Kelantan</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/kedah-2.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Kalong Hill</h2>
                                        <p>Kedah</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/pahang-2.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Genting Highland</h2>
                                        <p>Pahang</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/johor-1.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Legoland</h2>
                                        <p>Johor</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/selangor-2.jpg" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">FIRM</h2>
                                        <p>Selangor</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/sarawak-2.png" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Darul Hana Bridge</h2>
                                        <p>Sarawak</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/terengganu-2.png" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Taman Tamadun Islam</h2>
                                        <p>Terengganu</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; " data-swiper-slide-index="0">
                                <div class="testimonial-wrap">
                                    <img src="assets/img/gallery/penang-2.png" alt="" class="img-fluid" id="touristImage">
                                    <div class="overlay">
                                        
                                        <h2 id="locationName">Kek Lok Si Temple</h2>
                                        <p>Penang</p>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

                </div>
            </section>


<section id="services" class="services section-bg ">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Dolor Sitema</a></h4>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Nemo Enim</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Magni Dolore</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Eiusmod Tempor</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section>
            <section id="testimonials" class="testimonials">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-backface-hidden aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper" id="swiper-wrapper-333154d46c9a1c2e" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-877.333px, 0px, 0px); transition-delay: 0ms;">

            <!-- End testimonial item -->

            <!-- End testimonial item -->

            <!-- End testimonial item -->

            <!-- End testimonial item -->

            <!-- End testimonial item -->

          <div class="swiper-slide" role="group" aria-label="2 / 5" style="width: 418.667px; margin-right: 20px;" data-swiper-slide-index="1">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 5" style="width: 418.667px; margin-right: 20px;" data-swiper-slide-index="2">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="4 / 5" style="width: 418.667px; margin-right: 20px;" data-swiper-slide-index="3">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><div class="swiper-slide swiper-slide-next" role="group" aria-label="5 / 5" style="width: 418.667px; margin-right: 20px;" data-swiper-slide-index="4">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 418.667px; margin-right: 20px;" data-swiper-slide-index="0">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div></div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

      </div>
    </section>
            <section id="team" class="team section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2></h2>
                        <div class="" data-aos="fade-up">
                            <div class="content">
                                <h1 id="clickTitle">Need assistance or have a question?</h1>
                                <h3 id="clickDesc">Reach out to us by <a href="customerServices.html">clicking here</a></h3>
                            </div>
                        </div>
                    </div>

                </div>


            </section><!-- End Team Section -->
            <br><br><br>








        </main><!-- End #main -->

<?php include 'footer.php'; ?>