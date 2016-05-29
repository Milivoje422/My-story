<?php include "includes/head.php"; 
	require "functions/load.php";
?>




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
      
		<form action="" method="post" class="form-horizontal">
		  <div class="form-group">
		    <label for="inputEmail3"  class="col-sm-2 control-label">Username</label>
		    <div class="col-sm-10">
		      <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
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
      <button type="submit" name="logIn" class="btn-save">Sign in</button>
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


<!-- Work section
================================================== -->
<section id="work" class="parallax-section">
	<div class="container">
		<div class="row">

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

<?php include "includes/footer.php"; ?>