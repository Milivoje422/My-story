<?php include "includes/head.php"; ?>




<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Preloader section
================================================== -->
<section  class="preloader">

	<div class="sk-rotating-plane"></div>

</section>


<!-- Navigation section
================================================== -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#home" class="smoothScroll navbar-brand">My Story</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
            
				<li><a href="#home" class="smoothScroll">HOME</a></li>
                <!-- <li><a href="#work" class="smoothScroll">WORK</a></li> -->
				<li><a href="#about" class="smoothScroll">ABOUT</a></li>
				<!-- <li><a href="#team" class="smoothScroll">TEAM</a></li>
				<li><a href="#portfolio" class="smoothScroll">GALLERY</a></li>
				<li><a href="#plan" class="smoothScroll">PLANS</a></li> -->
				<!-- <li><a href="#contact" class="smoothScroll">CONTACT</a></li> -->
				<li><a href="#" data-toggle="modal" class="modal-login" data-target="#LgModal"> LOGIN </a></li>
			</ul>
		</div>

	</div>
</section>

<!-- Login Modal -->
<div class="modal fade" id="LgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content add-modal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">login</h4>
      </div>
      <div class="modal-body">
      
		<form class="form-horizontal">
		  <div class="form-group">
		    <label for="inputEmail3"  class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10 font-Sign">
		    <a href="signUp.php"><b>Don't have an account?</b></a>
		    </div>
		  </div>
		

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn-save">Sign in</button>
      <div class="btn-dismiss" data-dismiss="modal">Close</div>
      </div>
    </div>
  </div>
  </form>
</div>

<!-- Homepage section
================================================== -->
<div id="home">
	<div class="site-slider">
        <ul class="bxslider">
			<li>
                <img src="style/images/slider/slide1.jpg" alt="slider image 1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>My Story</h2>
                                <p class="color-white">Fusce elementum nisi et magna tristique, ut facilisis magna dapibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="style/images/slider/slide2.jpg" alt="slider image 2">
                <div class="container caption-wrapper">
                    <div class="slider-caption">
                        <h2>Bootstrap Theme</h2>
                        <p class="color-white">Pellentesque mollis purus ipsum. Fusce tristique ante et est placerat dignissim.</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="style/images/slider/slide3.jpg" alt="slider image 3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Mobile Ready</h2>
                                <p class="color-white">You may edit or remove any content section as you wish.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="style/images/slider/slide4.jpg" alt="slider image 4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Responsive Design</h2>
                                <p class="color-white">Phasellus ultrices, nunc et tempus porta, tellus purus elementum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="style/images/slider/slide5.jpg" alt="slider image 5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Get it FREE!</h2>
                               <p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul> <!-- /.bxslider -->
        <div class="bx-thumbnail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="bx-pager">
                            <a data-slide-index="0" href=""><img src="style/images/slider/thumb1.jpg" class="wow bounceIn" data-wow-delay="0.6s" alt="thumbnail 1" /></a>
                            <a data-slide-index="1" href=""><img src="style/images/slider/thumb2.jpg" class="wow bounceIn" data-wow-delay="0.9s" alt="thumbnail 2" /></a>
                            <a data-slide-index="2" href=""><img src="style/images/slider/thumb3.jpg" class="wow bounceIn" data-wow-delay="1s" alt="thumbnail 3" /></a>
                            <a data-slide-index="3" href=""><img src="style/images/slider/thumb4.jpg" class="wow bounceIn" data-wow-delay="1.3s" alt="thumbnail 4" /></a>
                            <a data-slide-index="4" href=""><img src="style/images/slider/thumb5.jpg" class="wow bounceIn" data-wow-delay="1.6s" alt="thumbnail 5" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.site-slider -->
</div>

<!-- Info footer in frist look
================================================== -->
<!-- <section class=col-md-4></section> -->
<!-- <section id="" class="col-md-4 first-footer"> -->
	<!-- <div class=""> -->
		<!-- <div class="container-fluid"> -->
		<!-- <div id="owl-work" class="owl-carousel"> -->
			<!-- <div class="row slider-1">
				<div>
				<p>Vegetable refined oil – Often known as hydrogenated oil. Oils such as canola oil or rapeseed oil, sunflower oil, safflower oil, ground oil, corn oil fall under the category of vegetable refined oil. Hydrogenated oils are extensively used in our daily cooking, as they are easily digested by the body and are termed as light weight oil. It is not advisable to reuse hydrogenated oils as they turn rancid very easily. Cooking in rancid oils leads to health problems like gastritis, diarrhoea, jaundice etc.</p></div>
				<div>
				<p>Nut oils– Oils like almond oil, walnut oil etc. are not used in large quantities as they are known as heavy oils. They are used in very minute quantities, either to add flavour or texture to the food. They are widely used in bakery products such as muffins, cinnamon rolls etc. in minute quantities. These oils should not be heated as they lose their nutrient value and are very dense in nature.</p></div>
				<div>
				<p>Seed oils – Oils like flaxseed oil, pumpkin seed oil, olive oil, soy oil falls in this category. Off late these oils are used in cooking due to their high nutritive value. These oils are the rich sources of omega 3 and omega 6 fatty acids and should not be heated, as they lose their nutrient value and becomes rancid. It is advisable to use such oils for salad dressings, making pasta, or some light cooking where the oil is not heated to above 100 degrees Celsius.</p></div>
				</div> -->
			<!-- </div> -->
			<!-- </div> -->
		<!-- </div> -->
	<!-- </div> -->
<!-- </section> -->
<!-- <section class="col-md-4"></section> -->
<!-- <div class="empty_space"></div> -->
<!-- Work section
================================================== -->
<section id="work" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<!-- <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8"> -->
				<!-- <div class="section-title"> -->
					<!-- <h5 class="wow bounceIn">Adventure Studio</h5> -->
					<!-- <h1 class="heading">WHAT WE DO</h1> -->
					<!-- <hr>
					<p>Click on the adventure logo at the top to scroll up. Nullam a finibus dui. Nullam malesuada vitae odio et fringilla.</p>
				</div>
			</div> -->


			<!-- Work Owl Carousel section
			================================================== -->
<!-- 			<div id="owl-work" class="owl-carousel">

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
					<i class="icon-tools medium-icon"></i>
						<h3>SOCIAL MEDIA</h3>
						<hr>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
					<i class="icon-tablet medium-icon"></i>
						<h3>TRIP PLANNING</h3>
						<hr>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<i class="icon-bike medium-icon"></i>
						<h3>WEB MARKETING</h3>
						<hr>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<i class="icon-flag medium-icon"></i>
						<h3>EXPLORING PLACES</h3>
						<hr>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<i class="icon-basket medium-icon"></i>
						<h3>RECREATIONS</h3>
						<hr>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

			</div>
 -->
		</div>
	</div>
</section>


<!-- About section
================================================== -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">ACTIVE PEOPLE</h5>
					<h1 class="heading color-white">WHO WE ARE</h1>
					<hr>
					<p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt.</p>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<h3 class="color-white">OUR STORY</h3>
				<h2>ADVENTURE STUDIO</h2>
				<p class="color-white">Adventure is free Bootstrap theme by <a rel="nofollow" href="http://www.tooplate.com" target="_parent">tooplate</a>. Download, edit, and use this layout for your website. Feel free to modify or remove anything to meet your desire. Excepteu sunt in culpa qui officia deserunt mollit.</p>
				<p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt mollit anim id.</p>
			</div>

			<div class="col-md-6 col-sm-12">
				<h2 class="mobile-top">WHY CHOOSE US?</h2>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingOne">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          							Very Fast Response
        						</a>
      						</h4>
    					</div>
   						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      						<div class="panel-body">
        						<p>Phasellus odio lacus, posuere vel sodales a, facilisis vitae ligula. Pellentesque leo ligula, lobortis ut sapien blandit, convallis pulvinar nisi. Proin tempor congue nibh. Nam non maximus metus, nec tincidunt nulla.</p>
      						</div>
   						 </div>
 					 </div>

    				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          							High Quality Team
        						</a>
      						</h4>
    					</div>
   						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
        						<p>Nullam vehicula tincidunt ultrices. Curabitur id magna velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pretium tortor ultrices ligula dictum placerat. Donec eget augue sapien. Curabitur vel orci magna. Sed id eros consequat nibh congue euismod.</p>
      						</div>
   						 </div>
 					 </div>

 					 <div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingThree">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          							Special Awards
        						</a>
      						</h4>
    					</div>
   						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
        						<p>Morbi pellentesque nisl at sapien congue facilisis. Proin consequat pharetra hendrerit. Aliquam vulputate, ligula ut pellentesque molestie, dolor nisi semper augue, sit amet porta risus sem non sapien. Cras vel pulvinar sapien, in consequat purus. Aliquam at varius augue.</p>
      						</div>
   						 </div>
 					 </div>

 				 </div>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="about-fact border-right">
					<span>32</span>
					<h4>TOURS</h4>
				</div>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="about-fact border-right">
					<span>16</span>
					<h4>AWARDS</h4>
				</div>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="about-fact border-right">
					<span>128</span>
					<h4>TRIPS</h4>
				</div>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="about-fact">
					<span>24</span>
					<h4>PLANS</h4>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- team section
================================================== -->
<!-- <section id="team" class="parallax-section">
	<div class="container">
		<div class="row"> -->

			<!-- Section title
			================================================== -->
			<!-- <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">WE ARE READY</h5>
					<h1 class="heading">OUR TEAM</h1>
					<hr>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="style/images/team1.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>George Chan</h4>
							<h3>Trip Planner</h3>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.3s">
				<div class="team-wrapper">
					<img src="style/images/team2.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Kitty Sandar</h4>
							<h3>Trip Manager</h3>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="style/images/team3.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Johnny Lynn</h4>
							<h3>Location Explorer</h3>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

		</div>
	</div>
</section> -->


<!-- Portfolio section
================================================== -->
<!-- <section id="portfolio" class="parallax-section">
	<div class="container">
		<div class="row"> -->

			<!-- Section title
			================================================== -->
			<!-- <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">WE ARE DELIGENT</h5>
					<h1 class="heading">SHOWCASE</h1>
					<hr>
					<p>Pellentesque mollis purus ipsum. Fusce tristique ante et est placerat dignissim. Curabitur tincidunt risus non dui vulputate tincidunt.</p>
				</div>
			</div>

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="style/images/portfolio-img1.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Mobile App</h2>
								<p class="icon-links">
									<a href="style/images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div>   

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="style/images/portfolio-img2.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Trip Planning</h2>
								<p class="icon-links">
									<a href="style/images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="style/images/portfolio-img3.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Scheduling</h2>
								<p class="icon-links">
									<a href="style/images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 
          	
          	<div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="style/images/portfolio-img4.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Arranging</h2>
								<p class="icon-links">
									<a href="style/images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="style/images/portfolio-img5.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Organizing</h2>
								<p class="icon-links">
									<a href="style/images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="style/images/portfolio-img6.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Grouping</h2>
								<p class="icon-links">
									<a href="style/images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div>  -->

            <!-- Portfolio bottom section
			================================================== -->
            <!-- <div class="col-md-offset-2 col-md-8 col-sm-12">
            	<div class="portfolio-bottom">
            		<h2>INTERESTED?</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Lorem ipsum dolor sit 	amet.</p>
					<a href="#plan" class="smoothScroll btn btn-default">LET'S GO!</a>
            	</div>
            </div>    

		</div>
	</div>
</section>	 -->	


<!-- Plan section
================================================== -->
<!-- <section id="plan" class="parallax-section">
	<div class="container">
		<div class="row">
 -->
			<!-- Section title
			================================================== -->
			<!-- <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 wow fadeInUp">
				<div class="section-title">
					<h5 class="wow bounceIn">UNIQUE ADVENTURES</h5>
					<h1 class="heading color-white">TRIP PLANS</h1>
					<hr>
					<p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
				<div class="plan">
					<h2 class="plan-title">Villager</h2>
					<div class="plan-price">
						<h1 class="plan-price-title">$500 / <small>trip</small></h1>
					</div>
					<ul class="plan-list">
						<li>4 days 3 nights</li>
						<li>Explore Forest</li>
						<li>Visit Waterfalls</li>
						<li>Group of 10 people</li>
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
				<div class="plan">
					<h2 class="plan-title">Tourer</h2>
					<div class="plan-price">
						<h1 class="plan-price-title">$800 / <small>trip</small></h1>
					</div>
					<ul class="plan-list">
						<li>8 days 7 nights</li>
						<li>Explore Mountains</li>
						<li>Touring Villages</li>
						<li>Group of 15 people</li>
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<div class="plan">
					<h2 class="plan-title">Explorer</h2>
					<div class="plan-price">
						<h1 class="plan-price-title">$1,400 / <small>trip</small></h1>
					</div>
					<ul class="plan-list">
						<li>12 days 11 nights</li>
						<li>Multiple Cities</li>
						<li>Unique Experiences</li>
						<li>Group of 20 people</li>
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</section> -->


<!-- Contact section
================================================== -->
<!-- <section id="contact" class="parallax-section">
	<div class="container">
		<div class="row"> -->

			<!-- Section title
			================================================== -->
			<!-- <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">PLAN YOUR TRIP</h5>
					<h1 class="heading">CONTACT US</h1>
					<hr>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla. Excepteu sunt in culpa qui officia deserunt mollit.</p>
				</div>
			</div> -->

			<!-- Contact form section
			================================================== -->
			<!-- <div class="col-md-offset-1 col-md-10 col-sm-12">
				<form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.6s">
					<div class="col-md-4 col-sm-6">
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>
					<div class="col-md-4 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="col-md-4 col-sm-12">
						<input type="text" class="form-control" placeholder="Subject" name="subject">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" rows="7" name"message"></textarea>
					</div>
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<input type="submit" class="form-control" value="SHOOT MESSAGE">
					</div>
				</form>
			</div> -->

			<!-- Contact detail section
			================================================== -->
			<!-- <div class="contact-detail col-md-12 col-sm-12">
				<div class="col-md-6 col-sm-6">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p>hello@company.com</p>
				</div>
				<div class="col-md-6 col-sm-6">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONES</h3>
					<p>010-010-0110 | 090-090-0990</p>
				</div>
			</div>

		</div>
	</div>
</section> -->



<?php include "includes/footer.php"; ?>