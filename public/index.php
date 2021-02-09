<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<?php include("assets\php\connect.php");
    // print_r($row);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PregWrist</title>

    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">


    
    <!-- Firebase App is always required and must be first -->
	<script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-app.js"></script>
	<!-- Add additional services that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-database.js"></script>
  
  <!-- Include Plotly.js -->
	<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
	<!-- Include the moment.js library -->
	<script src="https://momentjs.com/downloads/moment.js"></script>
  </head>
  <body>
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-md navbar-light py-3">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="assets/images/award.png" class="img-fluid" width="52px">
        PregWrist</a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        Menu
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Records</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Troubleshoot</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Live</a>
          </li>
        </ul>
      </div>
      <a href="#domain" class="domain ml-3" data-toggle="modal" data-target="#DomainModal">
        <div class="hamburger1">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </a>
    </div>
  </nav>
</section>


<!-- Domain Modal -->
<div class="modal right fade" id="DomainModal" tabindex="-1" role="dialog" aria-labelledby="DomainModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
          aria-hidden="true">&times;</span></button>

      <div class="modal-body">
        <div class="modal__content">
          <h2 class="logo"><img src="assets/images/award.png" class="img-fluid"> PregWrist</h2>
          <!-- if logo is image enable this   
          <h2 class="logo">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </h2> -->
          <p class="mt-md-3 mt-2">Lorem ipsum dolor sit amet, elit. Eos expedita ipsam at fugiat ab.</p>
          <div class="widget-menu-items mt-sm-5 mt-4">
            <h5 class="widget-title">Menu Items</h5>
            <nav class="navbar p-0">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="widget-social-icons mt-sm-5 mt-4">
            <h5 class="widget-title">Contact Us</h5>
            <ul class="icon-rounded address">
              <li>
                <!-- <p> #135 block, Barnard St. Brooklyn, <br>NY 10036, USA</p> -->
              </li>
              <li class="mt-3">
                <p><span class="fa fa-phone"></span> <a href="tel:+404-11-22-89">+254-711111</a></p>
              </li>
              <li class="mt-2">
                <p><span class="fa fa-envelope"></span> <a
                    href="mailto:medpillhospital@mail.com">PregWrist@mail.com</a></p>
              </li>
              <li class="top_li1 mt-2">
                <p><span class="fa fa-clock-o"></span> <a href="mailto:medpillhospital@mail.com">Mon - Sun 09:00 - 21:00
                  </a></p>
              </li>
            </ul>
          </div>
          <div class="widget-social-icons mt-sm-5 mt-4">
            <h5 class="widget-title">Follow Us</h5>
            <ul class="icon-rounded">
              <li><a class="social-link twitter" href="#url" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a class="social-link linkedin" href="#url" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="social-link tumblr" href="#url" target="_blank"><i class="fa fa-tumblr"></i></a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>
    <!-- //modal-content -->
  </div>
  <!-- //modal-dialog -->
</div>
<!-- //Domain modal -->
<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
   
    <div class="owl-one owl-carousel owl-theme">
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg">
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg">
                  </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg">
                 </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3 bg bg2" >
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg">
                  </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>
</div>
  <!-- /main-slider -->
</section>
  <!-- w3l-features-photo-7 -->
  <section class="w3l-features-photo-7 py-5">
      <div class="w3l-features-photo-7_sur py-lg-5 py-sm-3">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 w3l-features-photo-7_top-left">
                    <h1>Patient Records</h1> 
                    <br> 
                    <a href="patientRecords.php" class="btn-style btn-primary btn mt-lg-5 mt-4">All Patients</a>
                    <hr>
                    
                    
                    <h2><?php echo $row['Name']; ?>
                    </h2>
                      <p class="mb-lg-5 mb-4"><?php echo $row['PregnancyStatus']; ?></p>
                      <h4>Previous Notes</h4>
                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. orci urna. In et augue ornare,
                          tempor massa in, luctus sapien. Proin a diam et dui fermentum dolor molestie vel id
                          neque. Donec sed tempus enim, a congue risus. Pellen tesqu
                      </p> -->
                      <p>
                      <?php echo $row['PreviousNotes']; ?>
                      </p>
                      <div class="feat_top">
                          <div class="w3l-features-photo-7-box">
                              <div class="icon">
                                <img src="assets/images/heart.png" class="img-fluid"/>
                              </div>
                              <div class="info-feature">
                                  <h5 class="w3l-features-photo-7-box-txt"><a href="#url">Heart Pulse</a></h5>
                                  <p><?php echo $row['HeartPulse']; ?></p>
                              </div>
                          </div>
                          <div class="w3l-features-photo-7-box">
                            <div class="icon">
                              <img src="assets/images/icon1.png" class="img-fluid"/>
                            </div>
                              <div class="info-feature">
                                  <h5 class="w3l-features-photo-7-box-txt"><a href="#url">Vitals Reading</a></h5>
                                  <h6>Temperature Reading</h6><p><?php echo $row['VitalsReading']; ?></p>
                              </div>
                          </div>
                          <div class="w3l-features-photo-7-box">
                            <div class="icon">
                              <img src="assets/images/sthethoscope.png" class="img-fluid"/>
                            </div>
                              <div class="info-feature">
                                  <h5 class="w3l-features-photo-7-box-txt"><a href="#url">Doctor Notes</a></h5>
                                  <p><?php echo $row['DoctorsNotes']; ?></p>
                              </div>
                          </div>
                          <div class="w3l-features-photo-7-box">
                            <div class="icon">
                              <img src="assets/images/ambulance.png" class="img-fluid"/>
                            </div>
                              <div class="info-feature">
                                  <h5 class="w3l-features-photo-7-box-txt"><a href="#url">Emergency Contact</a></h5>
                                  <h6>Contact</h6><p>0711111111</p>
                                  <h6>Location</h6><p>Maldives</p>
                                  <h6>Next of Kin</h6><p>Stuart</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 w3l-features-photo-7_top-right mt-lg-0 mt-4">
                      <img src="assets/images/blackPreg.jpg" class="img-fluid" alt="" />
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- //w3l-features-photo-7 -->
<section class="w3l-video-sec">
	<div class="video-inner py-5">
		<div class="overlay1 py-lg-5 py-sm-3">
			<div class="container">
				<div class="video-content">
					<img src="assets/images/heart-big.png" class="img-fluid" alt="" />
					<h4><a href="#url">How to Troubleshoot PregWrist.</a></h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed obcaecati natus illum, placeat nam
						consequatur! Proin a diam et dui fermentum dolor.</p>
					<a href="#notify" class="play-button btn"><span class="fa fa-play pl-1" aria-hidden="true">

						</span></a>

					<!-- notify-popup-->
					<div id="notify" class="notify-pop-overlay">
						<div class="notify-popup">
							<h5>Your Current Watch List</h5>
							<iframe src="https://player.vimeo.com/video/180825357" frameborder="0"
								allow="autoplay; fullscreen" allowfullscreen></iframe>
							<a class="close" href="#close">&times;</a>
						</div>
					</div>
					<!-- //notify-popup -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- services page block 1 -->
<section class="w3l-features py-5">
    <div class="container py-lg-5 py-3">
        <div class="row main-cont-wthree-2">
            <div class="col-lg-6 feature-grid-right">
                <img src="assets/images/healthcare.jpg" class="img-fluid" alt="healthcare">
            </div>
            <div class="col-lg-6 feature-grid-left mt-lg-0 mt-sm-5 mt-4">
                <h4 class="title-left">Track All your clients</h4>
                <p class="text-para">Curabitur id gravida risus. Fusce eget ex fermentum, ultricies nisi ac sed, lacinia est.
                    Quisque ut lectus consequat, venenatis eros et, commodo risus. Nullam sit amet laoreet elit. </p>
                <div class="stats_main text-center">
                    <div class="w3l-stats">
                        <div class="">
                            <img src="assets/images/patients.png" class="img-fluid">
                        </div>
                        <div class="info-feature mt-3">
                            <h5 class="w3l-stats-txt"><a href="#url"><?php echo $num_rows ?></a></h5>
                            <p class="stats-text">Current Patients</p>
                        </div>
                    </div>
                    <div class="w3l-stats">
                        <div class="">
                            <img src="assets/images/services.png" class="img-fluid">
                        </div>
                        <div class="info-feature mt-3">
                            <h5 class="w3l-stats-txt"><a href="#url">4 HRS</a></h5>
                            <p class="stats-text">Last Reading</p>
                        </div>
                    </div>
                    <div class="w3l-stats">
                        <div class="">
                            <img src="assets/images/award.png" class="img-fluid">
                        </div>
                        <div class="info-feature mt-3">
                            <h5 class="w3l-stats-txt"><a href="#url">Green</a></h5>
                            <p class="stats-text">Color</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services page block 1 -->
<section class="w3l-apply-6" id="appointment">
	<!-- /apply-6-->
	<!-- <div class="apply-info py-5">
		<div class="container py-lg-5 py-sm-3">
			<div class="apply-grids-info row">
				<div class="apply-gd-left col-lg-5">
					<h4>Make an appointment</h4>
					<p class="para-apply">We will send you a confirmation within 24 hours.
						<br><strong>Emergency?</strong> Call 1-2554-2356-33
					</p>
					<div class="mt-lg-5 mt-4">
						<div class="sub-apply mt-5">
							<div class="apply-sec-info">
								<div class="icon">
									<img src="assets/images/icon1.png" class="img-fluid">
								</div>
								<div class="appyl-sub-icon-info">
									<h5><a href="blog-single.html">Immune system</a></h5>
									<p>Lorem ipsum dolor sit amet,Ea a diam et dui elit, orci urna vel id neque. Donec
										sed enim.</p>
									<a href="#url" class="learn">Learn More <i class="fa fa-long-arrow-right ml-2"></i></a>
								</div>
							</div>
						</div>
						<div class="sub-apply mt-5">
							<div class="apply-sec-info">
								<div class="icon">
									<img src="assets/images/sthethoscope.png" class="img-fluid">
								</div>
								<div class="appyl-sub-icon-info">
									<h5><a href="blog-single.html">Nutrition</a></h5>
									<p>Lorem ipsum dolor sit amet,Ea a diam et dui elit, orci urna vel id neque. Donec
										sed enim.</p>
									<a href="#url" class="learn">Learn More <i class="fa fa-long-arrow-right ml-2"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="apply-gd-right offset-lg-1 col-lg-6 mt-lg-0 mt-5">
					<div class="apply-form p-sm-5 p-4">
						<h5>Fill the form for appointment</h5>
						<form action="#" method="post">
							<div class="admission-form">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Full Name*" required="">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Phone Number*" required="">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email*" required="">
								</div>
								<select class="form-control">
									<option>Select Disease</option>
									<option>Lung disease</option>
									<option>Others</option>
								</select>
							</div>
							<div class="form-group">
								<textarea name="Comment" class="form-control" placeholder="Message*" required=""></textarea>
							</div>
							<button type="submit" class="btn btn-primary submit">Submit Now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</section>
<!-- //apply-6-->

  <!-- footer-28 block -->
 
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    
    <script src="assets/js/green-audio-player.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new GreenAudioPlayer('.ready-player-1', { stopOthersOnPlay: true });
        });
    </script>

    <!-- video popup -->
    <script>
      $('#notify').change(function () {
        if ($('#notify').is("Active")) {
          $('body').css('overflow', 'hidden');
        } else {
          $('body').css('overflow', 'auto');
        }
      });
    </script>
    <!-- //video popup -->

    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
      $(document).ready(function () {
        $('.owl-one').owlCarousel({
          loop: true,
          margin: 0,
          nav: false,
          responsiveClass: true,
          autoplay: false,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            480: {
              items: 1,
              nav: false
            },
            667: {
              items: 1,
              nav: true
            },
            1000: {
              items: 1,
              nav: true
            }
          }
        })
      })
    </script>
    <!-- //script -->
    
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

    <script src="assets/js/bootstrap.min.js"></script>

    </body>

    </html>

