<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<body>

		<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<a class="navbar-brand" href="voicebox.html">VoiceBOX</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="#">TOUR</a></li>
					<li><a href="#">HOW TO PODCAST</a></li>
					<li><a href="#">OUR PODCASTS</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				</ul>
		</nav>

		<!-- Begin page content -->
			<div class="bgimg-1">
				<div class="caption">
					<span class="border"></span>
					<p>Our Story</p>
					<p>We are an Albuquerque company specializing in whatever the hell we do.
					</p>
					<p>We work with Php, CSS, Bootstrap, javascript, and Wordpress. </p>
					<p>We partner with other artisans in the albuquerque area to help you vision become a reality.</p>
					<p></p>
				</div>
			</div>


			<div class="container">
				<h2>What we provide</h2>
				<div class="row form-group product-chooser">

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="product-chooser-item">
							<img src="images/css.jpg"
								  class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile and Desktop">
							<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
								<span class="title">CSS fixes</span>
								<span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
								<input type="radio" name="product" value="mobile_desktop" checked="checked">
							</div>
							<div class="clear"></div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="product-chooser-item">
							<img src="images/wordpress.jpg"
								  class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
							<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
								<span class="title">Wordpress</span>
								<span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
								<input type="radio" name="product" value="desktop">
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="product-chooser-item">
							<img src="images/fullwebdesign.png"
								  class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
							<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
								<span class="title">Fully responsive websites</span>
								<span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
								<input type="radio" name="product" value="mobile">
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
<!---us--->
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h1 class="text-center text-primary">Meet our Team</h1>
									<p class="text-center">We are a group of professionals that use our individual skill sets to deliver polished, efficiant websites </p>
								</div>
							</div>
							<div class="row">


								<div class="col-md-4">
									<img src="images/michelle.jpg"
										  class="img-quadrata center-block" >
									<h3 class="text-center" >Michelle Allen
										<br/>
										<small> Web Designer/VP Sales</small></h3>
								</div>
								<div class="col-md-4">
									<img src="images/myface.jpg"
										  class="center-block img-quadrata" >
									<h3 class="text-center" >Danielle Branch
										<br/>
										<small> Web Designer/VP Networking</small></h3>
								</div>
								<div class="col-md-4">
									<img src="https://unsplash.imgix.net/photo-1422222948315-28aadb7a2cb8?q=75&fm=jpg&s=cfeadbd7a991e58b553bee29a7eeca55"
										  class="center-block img-quadrata">
									<h3 class="text-center">Samantha Reds
										<br/>
										<small> Content manager</small></h3>
								</div>
								<div class="col-md-4">
									<img src="https://unsplash.imgix.net/photo-1422222948315-28aadb7a2cb8?q=75&fm=jpg&s=cfeadbd7a991e58b553bee29a7eeca55"
										  class="center-block img-quadrata">
									<h3 class="text-center">Samantha Reds
										<br/>
										<small> Content manager</small></h3>
								</div>
							</div>
						</div>
					</div>




				<!--I want this in a box-->
						<div class="bgimg-3">
					<div class="section-content">
						<h1 class="section-header"><span class="content-header wow fadeIn " data-wow-delay="0.2s"- data-wow-duration="2s"> </span></h1>
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
										<input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
									</div>
									<div class="form-group">
										<label for="telephone">Mobile No.</label>
										<input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="description"> Message</label>
										<textarea class="form-control" id="description" placeholder="Enter Your Message"></textarea>
									</div>
									<div>
										<button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> SendMessage</button></div>
									<footer>
										<div class="col-md-12">
											<ul class="social-network social-circle">
												<li><a href="#" class="icoGithub" title="Github"><i class="fa fa-github"></i></a>
												</li>
												<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
												</li>
												<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
												</li>
												<li><a href="#" class="icoInstagram" title="Google +"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
												</li>
											</ul>

											<!-- reCAPTCHA -->
											<div class="g-recaptcha" data-sitekey="--YOUR RECAPTCHA SITE KEY--"></div>

											<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send
											</button>
											<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>

				<script src="javascript/javascript.js"></script>
	</body>
</html>