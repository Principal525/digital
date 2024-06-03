<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Gp Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('land/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('land/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('land/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('land/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('land/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('land/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('land/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('land/assets/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Gp
    * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
    * Updated: Jun 02 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Palletblaque</h1>
            <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="">Home<br></a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="#">Get Started</a>

    </div>
</header>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <img src="{{asset('land/assets/img/heroimage.jpeg')}}" alt="" data-aos="fade-in">

        <div class="container">

            <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-6 col-lg-8">
                    <h4>Elevate Your Brand with Google, and Meta Ads Solutions
                        <span>.</span></h4>
                    <p>Reach shoppers who are looking for products like yours. Sponsored ads can level up your Amazon business by helping make your products be more discoverable.</p>
                </div>
            </div>

{{--            <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">--}}
{{--                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="bi bi-binoculars"></i>--}}
{{--                        <h3><a href="">Lorem Ipsum</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="bi bi-bullseye"></i>--}}
{{--                        <h3><a href="">Dolor Sitema</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="bi bi-fullscreen-exit"></i>--}}
{{--                        <h3><a href="">Sedare Perspiciatis</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="bi bi-card-list"></i>--}}
{{--                        <h3><a href="">Magni Dolores</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="bi bi-gem"></i>--}}
{{--                        <h3><a href="">Nemos Enimade</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{asset('land/assets/img/mobile_marketing.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <h3>Improve product visibility</h3>
                    <p class="fst-italic">
                        Help customers find your products with ads that appear in related shopping results and product pages.
                    </p>
                    <h3>Reach new customers</h3>
                    <p class="fst-italic">
                        Make your brand and products stand out with engaging creative formats.
                    </p>
                    <h3>Sell your products with efficiency</h3>
                    <p class="fst-italic">
                        By using keywords to appear in relevant shopping results, you can engage shoppers who have yet to discover your brand..
                    </p>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{asset('land/assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('land/assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('land/assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('land/assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('land/assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('land/assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('land/assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('land/assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">

            <div class="row gy-4">
                <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="{{asset('land/assets/img/features-bg.jpg')}}" alt=""></div>
                <div class="col-lg-6">

                    <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-archive flex-shrink-0"></i>
                        <div>
                            <h4>No up-front fees</h4>
                            <p>Pricing is cost-per-click, meaning you pay only when a shopper clicks on your ad.</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-basket flex-shrink-0"></i>
                        <div>
                            <h4>Start small</h4>
                            <p>You can increase your ad spend as you see your sales increase.</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-broadcast flex-shrink-0"></i>
                        <div>
                            <h4>Set your own budget</h4>
                            <p>You’ll never be charged more than the budget you set.</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-camera-reels flex-shrink-0"></i>
                        <div>
                            <h4>Ad products designed for everyone</h4>
                            <p>Sponsored Products are cost-per-click (CPC) ads that promote individual product listings on Amazon and select premium apps and websites. You can create a campaign in just a few minutes, even if you’ve never advertised before.</p>
                        </div>
                    </div><!-- End Features Item-->

                </div>
            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Check our Services</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>WHAT WE DO</h3>
                        </a>
                        <p>Palletblaque is a cutting-edge digital marketing agency that helps businesses thrive in the online landscape. Our expertise lies in building websites, crafting compelling content, maximizing Google and leveraging Meta Ads to drive real results.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Content Solutions</h3>
                        </a>
                        <p>Engage your audience with our tailored content strategies, including:</p>
                        <P> - Blog posts that resonate</P>
                           <P> - Social media content that sparks conversations</P>
                            <P>- Email marketing that drives conversions</P>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Google Ads Expertise</h3>
                        </a>
                        <p>Reach new heights with our Google Ads services:</p>
                        <P> - Keyword research and optimization</P>
                        <P> - Ad copywriting that drives clicks</P>
                        <P> - Campaign management for maximum RO</P>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Meta Ads Innovation</h3>
                        </a>
                        <p>Unlock the power of Meta Ads with our expertise:</p>
                        <P> - Ad creation that grabs attention</P>
                           <P> - Targeting that reaches your ideal audience</P>
                           <p> - Campaign optimization for maximum impact</P>
                        <a href="" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="" class="stretched-link">
                            <h3>Why Choose Us</h3>
                        </a>
                        <p>- Personalized service from a dedicated team</p>
                            <P>- Data-driven strategies that deliver results</P>
                            <P>- Continuous optimization and improvement</P>
                        <a href="" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

        <img src="{{asset('land/assets/img/cta-bg.jpg')}}" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Call To Action</h3>
                        <p>Ready to elevate your digital presence? Contact us today to schedule a consultation and take the first step towards unlocking your digital potential!</p>
                        <a class="cta-btn" href="#">Call To Action</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

                        <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>our Team</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('land/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('land/assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('land/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('land/assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>lagos state</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+2349061123233</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>Palletblaquedigittals@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>

<footer id="footer" class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">GP</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p></p>
                        <p></p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+2349061123233</span></p>
                        <p><strong>Email:</strong> <span>akinlabijoseph14@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#"> Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#"> About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#"> Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#"> Terms of service</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#"> Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#"> Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#"> Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#"> Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#"> Marketing</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#"> Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container text-center">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">IT     </strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by SAMMIGHTY<a href="https://bootstrapmade.com/">SAMMIGHTY</a>
            </div>
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('land/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('land/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('land/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('land/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('land/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('land/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('land/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('land/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('land/assets/js/main.js')}}"></script>

</body>

</html>
