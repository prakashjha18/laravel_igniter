{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>Bingo | Responsive Multipurpose Parallax HTML5 Template</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- RS5.0 Main Stylesheet -->
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/settings.css">
  <!-- RS5.0 Layers and Navigation Styles -->
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/navigation.css">
  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/settings.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/navigation.css"> 
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">


  <!-- Colors -->
  <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green">
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="light-red">
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue">
  <link rel="stylesheet" type="text/css" href="css/colors/light-blue.css" title="light-blue">
  <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow">
  <link rel="stylesheet" type="text/css" href="css/colors/light-green.css" title="light-green">
  

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  

<!--
Fixed Navigation
==================================== -->
<header class="navigation navbar navbar-fixed-top">
   <div class="container">
      <div class="navbar-header">
         <!-- responsive nav button -->
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <!-- /responsive nav button -->
         <!-- logo -->
         <a class="navbar-brand logo" href="index.html">
            <img class="logo-default" src="images/logo.png" alt="logo" />
            <img class="logo-white" src="images/logo-white.png" alt="logo" />
         </a>
         <!-- /logo -->
      </div>
      <!-- main nav -->
      <nav class="collapse navbar-collapse navbar-right">
         <ul id="nav" class="nav navbar-nav menu">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Homepage <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="index.html">Homepage</a></li>
                     <li><a href="index-text.html">Homepage 2</a></li>
                     <li><a href="onepage-slider.html">Onepage</a></li>
                     <li><a href="onepage-text.html">Onepage 2</a></li>
                  </ul>
               </li>
               <li><a href="about.html">About Us</a></li>
               <li><a href="service.html">Services</a></li>
               <li><a href="portfolio.html">Portfolio</a></li>
               <li><a href="team.html">Team</a></li>
               <li><a href="pricing.html">Pricing</a></li>
               <li><a href="contact.html">Contact</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="404.html">404 Page</a></li>
                     <li><a href="blog.html">Blog Page</a></li>
                  </ul>
               </li>
            </li>
         </ul>
      </nav>
      <!-- /main nav -->
   </div>
</header>
<!--
End Fixed Navigation
==================================== -->




	 <!--
Welcome Slider
==================================== -->

<section class="hero-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" >We are smart <br> Creative Agency</h1>
					<p class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, ad rerum repellat. Sequi, labore, illo. Ducimus voluptates quidem obcaecati, ad.</p>
					<ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
						<li>
							<a data-scroll href="#services" class="btn btn-main">Explore Us</a>		
						</li>
						<li>
							<a data-scroll href="#team" class="btn btn-transparent">Learn More</a>			
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>	


<!--
Start About Section
==================================== -->
<section class="service-2 section">
  <div class="container">
    <div class="row">

      <!-- section title -->
      <div class="title text-center"  >
        <h2>What Do We Offer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, earum. </p>
        <div class="border"></div>
      </div>
      <!-- /section title -->

      <div class="col-md-4 text-center">
        <img src="images/about/member.jpg" class="inline-block" alt="">
      </div>
      <div class="col-md-8">
        <div class="row text-center">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-alarm-outline"></i>
              <h4>Time Management</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-briefcase-outline"></i>
              <h4>Marketing Ideas</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-email-outline"></i>
              <h4>Mail Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-locked-outline"></i>
              <h4>Secure System</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
        </div>
      </div>
    </div>    <!-- End row -->
  </div>    <!-- End container -->
</section>   <!-- End section -->

<!--
Start About Section
==================================== -->
<section class="about-2 section" id="about">
	<div class="container">
		<div class="row">
		
			<!-- section title -->
			<div class="title text-center"  >
				<h2>We Are Bingo Agency</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus labore iusto, aut, eum itaque illo totam tempora eius.</p>
				<div class="border"></div>
			</div>
			<!-- /section title -->

			<div class="col-md-6">
				<img src="images/about/about-2.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-6">
				<ul class="checklist">
                    <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                    <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                    <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                    <li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
                    <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                </ul>
				<a href="#" class="btn btn-main mt-20">Learn More</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Let's Create Something Together</h2>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
				<a href="" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--
		Start Counter Section
		==================================== -->
		
		<section  class="counter-wrapper section-sm" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="title">
							<h2>Award-Winning Agency</h2>
							<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
						</div>
					</div>
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-alarm-outline"></i>
							<div>
							    <span class="counter" data-count="150">150</span>
							</div>
							<h3>Happy Clients</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-analytics-outline"></i>
							<div>
							    <span class="counter" data-count="130">130</span>
							</div>
							<h3>Projects completed</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
						<div class="counters-item">
							<i class="tf-ion-ios-compose-outline"></i>
							<div>
							    <span class="counter" data-count="99">99</span>
							</div>
				            <h3>Positive feedback</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
						<div class="counters-item kill-border">
							<i class="tf-ion-ios-bolt-outline"></i>
							<div>
							    <span class="counter" data-count="250">250</span>
							</div>
							<h3>Cups of Coffee</h3>
						</div>
					</div>
					<!-- end fourth count item -->
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->

<!-- Start Testimonial
=========================================== -->
		
	<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Abul Mal Muhit</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
				
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Abul Mal Muhit</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Abul Mal Muhit</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->

<!--
		Start Blog Section
		=========================================== -->
				
	<section class="blog" id="blog">
		<div class="container">
			<div class="row">

				<!-- section title -->
				<div class="title text-center ">
					<h2> Latest <span class="color">Posts</span></h2>
					<div class="border"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>
				</div>
				<!-- /section title -->
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 clearfix " >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="images/blog/post-1.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>						
				</article>
				<!-- /single blog post -->
				
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 "  >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="images/blog/post-2.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>						
				</article>
				<!-- end single blog post -->
				
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 "  >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="images/blog/post-3.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>						
				</article>
				<!-- end single blog post -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end section -->

<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>about</h3>
          <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Our Services</h3></li>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Quick Links</h3></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ’s</a></li>
            <li><a href="#">Badges</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Connect with us Socially</h3></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Pinterest</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 2016. All rights reserved.</h5>
    <h6>Design and Developed by <a href="">Themefisher</a></h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->
    
    <!-- 
    Essential Scripts
    =====================================-->
    
  <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- slick Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Portfolio Filtering -->
    <script src="plugins/mixitup/dist/mixitup.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script type="text/javascript" src="plugins/revo-slider/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/revo-slider/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Custom js -->
    <script src="js/script.js"></script>

      <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
    (Load Extensions only on Local File Systems ! 
    The following part can be removed on Server for On Demand Loading) --> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.actions.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.migration.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.video.min.js"></script> 
   
<script>
  
    /* https://learn.jquery.com/using-jquery-core/document-ready/ */
    jQuery(document).ready(function() {
 
        /* initialize the slider based on the Slider's ID attribute */
        jQuery('#rev_slider_1').show().revolution({
 
            /* options are 'auto', 'fullwidth' or 'fullscreen' */
            sliderLayout: 'fullscreen',
 
            /* basic navigation arrows and bullets */
            navigation: {
 
                arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  }
                  ,
                  bullets: {
                    enable:false,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                  }
            }
        });
    });
</script>

</body>
</html>
