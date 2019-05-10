<?php
$db = mysqli_connect("localhost","root","usbw","drimranadeelwebsite");
$sql = "SELECT * from blogs";
$result = mysqli_query($db, $sql);
$rows = mysqli_num_rows($result);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Dr. Imran Adeel - Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="One of the best plastic surgery clinic in Bahawalpur, operated by Dr Imran Adeel, the second most experienced and qualified plastic surgeon in the city.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icon.ico">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
<style media="screen">
	html{
		scroll-behavior: smooth;
	}
</style>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="index.html">
					<div>Dr<span>Imran Adeel</span></div>
					<div>MBBS, FCPS(Plastic Surgery)</div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="services.html">Services</a></li>
					<li class="active"><a href="blog.php">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

				<!-- Work Hourse -->
				<div class="work_hours">Mo - Sun: 8:00am - 9:00pm</div>

				<!-- Header Phone -->
				<div class="header_phone">+92 333 636 6429</div>

				<!-- Appointment Button -->
				<div class="button button_1 header_button"><a href="contact.html">Make an Appointment</a></div>

				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="https://www.facebook.com/imran.adeel.plasticsurgeon.2017/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<!-- Hamburger -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_link">Mo - Sun: 8:00am - 9:00pm</div>
			<div class="menu_link">+92 333 636 6429</div>
			<div class="menu_link"><a href="contact.html">Make an appointment</a></div>
		</div>
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="https://www.facebook.com/imran.adeel.plasticsurgeon.2017/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	<!-- Home -->

	<div class="home d-flex flex-column align-items-start justify-content-end">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="home_overlay"><img src="images/home_overlay.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Blog</div>
							<div class="home_text">Short articles on different surgeries and treatments in Plastic Surgery</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">


					<!-- Blog Post -->
					<?php
						while ($row = mysqli_fetch_assoc($result))
						{
							$title = $row["title"];
							$author = $row["author"];
							$content = $row["content"];
							$imagelocation = $row["imagelocation"];
							list($year, $month, $day) = explode('-', $row['datepublished']);
 							$monthName = date("F", mktime(0, 0, 0, $month, 10));

					?>
							<div class="blog_post">
								<div class="blog_post_image"><img src="<?=$imagelocation ?>" alt=""></div>
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">

									<div class="date_day"><?=$day ?></div>
									<div class="date_month"><?=$monthName ?></div>
									<div class="date_year"><?=$year ?></div>
								</div>
								<div class="blog_post_title"><a href="#"><?=$title ?></a></div>
								<div class="blog_post_info">
									<ul class="d-flex flex-row align-items-center justify-content-center">
										<li>by <a href="#"><?=$author ?></a></li>
										<li>in <a href="#">Surgery</a></li>
									</ul>
								</div>
								<div class="blog_post_text text-center">
									<p><?=$content ?></p>
								</div>
							</div>
							<?php
						}

					?>


				</div>
			</div>

		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="newsletter_title">Subscribe to our newsletter</div>
				</div>
			</div>
			<div class="row newsletter_row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_form_container">
						<form action="#" id="newsleter_form" class="newsletter_form">
							<input type="email" class="newsletter_input" placeholder="Your E-mail" required="required">
							<button class="newsletter_button">subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="footer_logo">
								<a href="#">
									<div>Dr<span>Imran Adeel</span></div>
									<div>MBBS, FCPS(Plastic Surgery)</div>
								</a>
							</div>
							<div class="footer_about_text">
								<p>I am one of the leading plastic surgeons in Bahawalpur. Currently working as an Assistant Professor in Multan Medical & Dental College. I have a professional team to help you in all your plastic surgery needs.</p>
							</div>
						</div>
					</div>

					<!-- Footer Contact Info -->
					<div class="col-lg-3 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Contact Info</div>
							<ul class="contact_list">
								<li>+92 333 636 6429</li>
								<li>imran_adeel17@yahoo.com</li>
							</ul>
						</div>
					</div>

					<!-- Footer Locations -->
					<div class="col-lg-3 footer_col">
						<div class="footer_location">
							<div class="footer_title">Our Locations</div>
							<ul class="locations_list">
								<li>
									<div class="location_title">Bahawalpur</div>
									<div class="location_text">The Cozmetiques - The Doctor's Hospital, Model Town C</div>
								</li>
								<li>
									<div class="location_text">The Cozmetiques - Mohammadiyya Colony</div>
								</li>
								<li>
									<div class="location_title">Multan</div>
									<div class="location_text">Ibne Sina Hospital - MMDC Multan</div>
								</li>
							</ul>
						</div>
					</div>

					<!-- Footer Opening Hours -->
					<div class="col-lg-3 footer_col">
						<div class="opening_hours">
							<div class="footer_title">Opening Hours</div>
							<ul class="opening_hours_list">
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Monday:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Thuesday:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Wednesday:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Thursday:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Friday:</div>
									<div class="ml-auto">8:00am - 7:00pm</div>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="index.html" target="_blank">Dr Imran Adeel</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
							<nav class="footer_nav ml-md-auto">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog.js"></script>

<script type="text/javascript">
(function() {
  var dg_scr = document.createElement('script'); dg_scr.type = 'text/javascript'; dg_scr.async = true;
  dg_scr.src = (('https:' == document.location.protocol) ? 'https://' : 'http://') + 'track.freecallinc.com/freecall.js';
  dg_scr.onload = function(){
    try {
      deskGod.track(73532, 70925);
    } catch(err){ }
  };
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(dg_scr, s);
})();
</script>

</body>
</html>
