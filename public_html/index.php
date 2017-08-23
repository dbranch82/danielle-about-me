<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<!-- NEED TO MOVE SCROLLING TEXT SECTIONS THEY ARE NOT IN THE RIGHT SPOT-->

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- Theme CSS -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery - reqiured for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>


	<body>
		<header><!-- Fixed navbar --><!-- BREAKING MY SCROLL BAR ASK R -->
			<nav id="header" class="navbar navbar-fixed-top">
				<div id="header-container" class="container navbar-container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
								  aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a id="brand" class="navbar-brand" href="#">Project name</a>
					</div>
					<div id="navbar" class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!-- /.nav-collapse -->
				</div><!-- /.container -->
			</nav><!-- /.navbar --></header>
		<div class="bgimg-1">
			<div class="caption">
				<span class="border">Whatever our name is</span>
				<p></p>
			</div>
		</div>
		<!-- Why the weird white line -->

		<div class="divstyle1">
			<p>Our Story</p>
			<p>Michelle and Danielle met the summer of 2017 while taking classes in computer programming. The instantly
				connected and became friends. They realized that they both had strong people skills and were both confident
				in different areas of web development and design. They developed their business plan while still in school
				and the day of graduation launched Unisus</p>
		</div>
		<div class="bgimg-2">
			<div class="caption">
				<span class="scared">What we believe in</span>
			</div>
		</div>
		<div class="divstyle1">
			<p>We are a 100% women owned business. We believe in giving back whenever possible. Part of our business model
				includes giving back to the community through job development tools. We believe in what comes around goes
				around so we want to spread give back some of the oppurtunity that we have been fortunate enough to
				receive.</p>
		</div>

		<div class="bgimg-4">
			<div class="caption">
				<span
					class="scared">We provide all of your website needs yadayadayada blahblahblah give me your money</span>
			</div>
		</div>

		<div class="divstyle2">
			<p> If your looking for a one page portfolio or a full blown custom built website we have you covered. We build
				and design websites for small business but we also do one pagers for people needing something more to add to
				their business cards. Regardless of your needs we will let the project talk to us and work together to help
				you achieve your vision.</p>

		</div>
		<div class="container">
			<h2>Normal</h2>
			<div class="row form-group product-chooser">

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="product-chooser-item selected">
						<img src="http://renswijnmalen.nl/bootstrap/desktop_mobile.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile and Desktop">
						<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
							<span class="title">Mobile and Desktop</span>
							<span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
							<input type="radio" name="product" value="mobile_desktop" checked="checked">
						</div>
						<div class="clear"></div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="product-chooser-item">
						<img src="http://renswijnmalen.nl/bootstrap/desktop.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
						<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
							<span class="title">Desktop</span>
							<span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
							<input type="radio" name="product" value="desktop">
						</div>
						<div class="clear"></div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="product-chooser-item">
						<img src="http://renswijnmalen.nl/bootstrap/mobile.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
						<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
							<span class="title">Mobile</span>
							<span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
							<input type="radio" name="product" value="mobile">
						</div>
						<div class="clear"></div>
					</div>
				</div>

			</div>
		</div>
<div class="bgimg-3"></div>
					<div class="oops">
						<p>Projects we have worked or are currently working on</p>
						<p>Ask Rochelle about bubbles need at least four circles here for projects.</p>
					</div>

<!--I SHOULD HAVE DONE A MOCK UP-->

				<div class="caption">
					<span class="border">Let's Talk!</span>
					<p>Contact Form</p>
					<footer><a href="tel:">505-589-1515</a></footer>
				</div>
		<div class="bgimg-3"></div>
				<!--I want this in a box-->
				<section id="contact">
					<div class="section-content">
						<h1 class="section-header"><span class="content-header wow fadeIn " data-wow-delay="0.2s"
																	data-wow-duration="2s"> </span></h1>
						<h3>General questions / Project inquires</h3>
					</div>
					<div class="contact-section">
						<div class="container">
							<form>
								<div class="col-md-6 form-line">
									<div class="form-group">
										<label for="exampleInputUsername">Your name</label>
										<input type="text" class="form-control" id="" placeholder=" Enter Name">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail">Email Address</label>
										<input type="email" class="form-control" id="exampleInputEmail"
												 placeholder=" Enter Email id">
									</div>
									<div class="form-group">
										<label for="telephone">Mobile No.</label>
										<input type="tel" class="form-control" id="telephone"
												 placeholder=" Enter 10-digit mobile no.">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="description"> Message</label>
										<textarea class="form-control" id="description"
													 placeholder="Enter Your Message"></textarea>
									</div>
									<div>

										<button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane"
																												  aria-hidden="true"></i> Send
											Message
										</button>
									</div>
									<footer>
										<div class="col-md-12">
											<ul class="social-network social-circle">
												<li><a href="#" class="icoGithub" title="Github"><i class="fa fa-github"></i></a>
												</li>
												<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
												</li>
												<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
												</li>
												<li><a href="#" class="icoInstagram" title="Google +"><i
															class="fa fa-instagram"></i></a></li>
												<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
												</li>
											</ul>
										</div>
									</footer>

								</div>
							</form>
						</div>
				</section>

			</div>
	</body>
</html>