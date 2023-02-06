<!doctype html>
<html lang="en">

  <head>
    <title>Al Tamimi &mdash; Shipping</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/css/style.css">
<link rel="stylesheet" href="<?=base_url()?>/assets/whatsapp/whatsapp.css">
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<!--Div where the WhatsApp will be rendered-->
<div id="WAButton" style="position: fixed; z-index: 100"></div>
<!--Div where the WhatsApp will be rendered-->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


<!--       <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@yourdomain.com</span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">1+ (234) 5678 9101</span></a>


              <div class="float-right">

                <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>

              </div>

            </div>

          </div>

        </div>
      </div> -->

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">

          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="index.html" class="text-black"><span class="text-primary">Al Tamimi</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="/littlekidsplanet/" class="nav-link">Home</a></li>
                  <li><a href="/littlekidsplanet/" class="nav-link">Services</a></li>


                  <li class="has-children">
                    <a href="#about-section" class="nav-link">About Us</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="/littlekidsplanet/" class="nav-link">Why Us</a></li>
                      <li><a href="/littlekidsplanet/" class="nav-link">Team</a></li>
                      <li><a href="/littlekidsplanet/" class="nav-link">FAQ</a></li>
                      <!-- <li><a href="#pricing-section" class="nav-link">Pricing</a></li> -->
                      <!-- <li class="has-children">
                        <a href="#">More Links</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li> -->
                    </ul>
                  </li>
                  <li><a href="/littlekidsplanet/enquiry" class="nav-link">Enquiry</a></li>
                  <li><a href="/littlekidsplanet/" class="nav-link">Resources</a></li>

                  <li><a href="/littlekidsplanet/" class="nav-link">Testimonials</a></li>
                  <li><a href="/littlekidsplanet/" class="nav-link">Blog</a></li>
                  <li><a href="/littlekidsplanet/" class="nav-link">Contact</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>

      <div class="site-section-cover overlay inner-page bg-light" style="background-image: url('<?=base_url()?>/assets/frontend/images/cargo_sea_small.jpg')" data-aos="fade">
      
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-lg-10">

            <div class="box-shadow-content">
              <div class="block-heading-1">
                <h1 class="mb-4" data-aos="fade-up" style="font-size:35px">Submit Your Enquiry Here</h1>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
      
    </div>
   <br>
    <div class="container ">
      <h2></h2>
    </div>
    <div class=""style="">
      <div class="container">
        <div class="row">
          <!-- FORM START -->

          <div class="col-md-6">
            
          <form action="Enquiry/addEnquiry" method="POST" name="enquiry-form">
            <h3>Select Mode</h3>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Air</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Sea</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Land</label>
            </div>
            <!-- Pickup -->
            <h3>Pickup Location</h3>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCountry">Country</label>
                <select id="inputCountry" class="form-control" name="pCountry">
                  <option selected>Choose...</option>
                  <option>India</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control" name="pState">
                  <option selected>Choose...</option>
                  <option>Madhya Pradesh</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <select id="inputCity" class="form-control" name="pCity">
                  <option selected>Choose...</option>
                  <option>Indore</option>
                </select>
              </div>              
              <div class="form-group col-md-6">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="pZip">
              </div>
            </div>            
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St" name="pAddress">
            </div>
          </div>

            <!-- Delivery -->
          <div class="col-md-6" style="position: relative;top: 70px;border-left: 1px solid grey;">
            <h3>Delivery Location</h3>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCountry">Country</label>
                <select id="inputCountry" class="form-control" name="dCountry">
                  <option selected>Choose...</option>
                  <option>India</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control" name="dState">
                  <option selected>Choose...</option>
                  <option>Madhya Pradesh</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <select id="inputCity" class="form-control" name="dCity">
                  <option selected>Choose...</option>
                  <option>Indore</option>
                </select>
              </div>              
              <div class="form-group col-md-6">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="dZip">
              </div>
            </div>            
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St" name="dAddress">
            </div>           
          </div>

            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>

          <!-- FORM END -->



          <div class="col-md-12 blog-content">
            <p class="lead"></p>


           <!--  <div class="pt-5">
              <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
            </div>
 -->

            <div class="pt-5">
             <!--  <h3 class="mb-5">6 Comments</h3> -->
          <!--     <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_2.jpg" alt="Image">
                  </div>
                  <div class="comment-body">
                    <h3>Jacob Smith</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_3.jpg" alt="Image">
                  </div>
                  <div class="comment-body">
                    <h3>Chris Meyer</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/person_5.jpg" alt="Image">
                      </div>
                      <div class="comment-body">
                        <h3>Chintan Patel</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="images/person_1.jpg" alt="Image">
                          </div>
                          <div class="comment-body">
                            <h3>Jean Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="images/person_4.jpg" alt="Image">
                                </div>
                                <div class="comment-body">
                                  <h3>Ben Afflick</h3>
                                  <div class="meta">January 9, 2018 at 2:21pm</div>
                                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
              </ul> -->
              <!-- END comment-list -->
              
             <!--  <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
                  </div>

                </form>
              </div> -->
            </div>

          </div>
          <!-- <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Creatives <span>(12)</span></a></li>
                <li><a href="#">News <span>(22)</span></a></li>
                <li><a href="#">Design <span>(37)</span></a></li>
                <li><a href="#">HTML <span>(42)</span></a></li>
                <li><a href="#">Web Development <span>(14)</span></a></li>
              </div>
            </div>
            <div class="sidebar-box">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle">
              <h3 class="text-black">About The Author</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="#" class="btn btn-primary btn-md text-white">Read More</a></p>
            </div>

            <div class="sidebar-box">
              <h3 class="text-black">Paragraph</h3>
              <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
            </div>
          </div> -->
        </div>
      </div>
    </div>


     <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <!-- <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
            </div> -->


            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <!-- <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright">
              </p>
            </div>
          </div>

        </div> -->
      </div>
    </footer>

    </div>

    <script src="<?=base_url()?>/assets/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>/assets/frontend/js/popper.min.js"></script>
    <script src="<?=base_url()?>/assets/frontend/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/assets/frontend/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>/assets/frontend/js/jquery.sticky.js"></script>
    <script src="<?=base_url()?>/assets/frontend/js/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>/assets/frontend/js/jquery.animateNumber.min.js"></script>
    <script src="<?=base_url()?>/assets/frontend/js/jquery.fancybox.min.js"></script>
    <script src="<?=base_url()?>/assets/frontend/js/jquery.easing.1.3.js"></script>
    <script src="<?=base_url()?>/assets/frontend/js/aos.js"></script>

    <script src="<?=base_url()?>/assets/frontend/js/main.js"></script>
      <!--Floating WhatsApp javascript-->
      <script type="text/javascript" src="<?=base_url()?>/assets/whatsapp/whatsapp.js"></script>
    <script type="text/javascript">

      


       setTimeout(function(){

        $(function() {        
          $('#WAButton').floatingWhatsApp({
            phone: '+91 77718 80390', //WhatsApp Business phone number International format-
            //Get it with Toky at https://toky.co/en/features/whatsapp.
            headerTitle: 'Chat with us on WhatsApp!', //Popup Title
            popupMessage: 'Hello, how can we help you?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
            //headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            position: "right"    
          });
        });



        }, 2000);
      
            $(function() {                
                $(".hide-out").hide(8000);
            });
        
    </script>

  </body>

</html>
