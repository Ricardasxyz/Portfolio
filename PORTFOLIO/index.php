<!DOCTYPE html>
<html lang="en">
<head>
	<title>Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<header>
		<div class="Intro_Name Container flex">
			<img src="Images/logo.png" alt="Logo">
			<p>Portfolio</p>
		</div>
	</header>
	<section class="landing">
		<div class="Container flex">
			<h1 class="type"></h1>
			<p>If that's the case, </p>
			<div class="flex">
				<a href="#porfolio"><p>Click For Portfolio</p></a>
			</div>		
				<a href="#here" id="scrollDown" ><img src="Images/arrow.png" alt="arrow_down"></a>			
		</div>
	</section>
	<div class="background_layer_about">
		<section class="About Container" id="here">
			<h2>About</h2>
			<p>I’ve got one huge issue – I love problems. I love problems related to my hobbies, problems related to health and problems related to life in general, but above all – I like solving them. Programming to me is an emotional rollercoaster. I hate it, but I also love it. It’s my drug. When I’m not coding, I usually play the guitar, write or read some books.</p>
	</section>
	</div>
	<section class="Things_I_Do Container flex">
		<div>
			<img src="Images/about_icon_background.png" alt="blue_background">
			<i class="fas fa-desktop p_img"></i>	
			<h2>Front-End</h2>
			<div>I know CSS3, Bootstrap and jQuery, which I use to build websites and apps.</div>
		</div>
		<div>
			<img src="Images/about_icon_background.png" alt="blue_background">
			<i class="fab fa-linode p_img"></i>
			<h2>Back-End</h2>
			<div>Mainly PHP and SQL. I can add a form, play with the database and I’ve got the basics down, too. I've recently finished Coding School bootcamp, where I've also learned to Use Wordpress.</div>
		</div>
		<div>
			<img src="Images/about_icon_background.png" alt="blue_background">
			<i class="fas fa-thumbs-up p_img"></i>
			<h2>Random</h2>
			<div>I drink quite a lot of coffee.</div>
		</div>
	</section>
	<div class="to_top">
			<img src="Images/arrowUp.png" class="small_Image" alt="scrollUp_Img">
	</div>
	<div class="background_layer_portfolio">
		<section class="portfolio Container">
			<h2 id="porfolio">Portfolio</h2>
			<p>Just warming up.</p>
			<div class="flex Portfolio_examples">
				<div class="flex">
					<img src="Images/portfolio_page.jpg" alt="Portfolio_example">
					<div>
						<a href="http://codingschoolprojektai.lt/tmp/kgbootcamp/ricardas_staniulis/wp" target="_blank"><img src="Images/zoomIn.png" alt="link_to_website" target="_blank"></a>
						<a href="https://github.com/Ricardasxyz/Portfolio/tree/master/vcs-starter" target="_blank"><img src="Images/hover.png" alt="link_to_code"></a>
					</div>
				</div>
				<div class="flex">
					<img src="Images/Color_Game.png" alt="Color_Game_picture">
					<div>
							<a href="#"><img src="Images/zoomIn.png" alt="link_to_website"></a>
						<a href="https://github.com/Ricardasxyz/Portfolio/tree/master/ColorGame" target="_blank"><img src="Images/hover.png" alt="link_to_code"></a>
					</div>
				</div>
				<div class="flex">
					<img src="Images/cat.png" alt="cat_landing_page" class="Image">
					<div>
						<a href="#"><img src="Images/zoomIn.png" alt="link_to_website"></a>
						<a href="https://github.com/Ricardasxyz/Portfolio/tree/master/cat_page" target="_blank"><img src="Images/hover.png" alt="link_to_code"></a>
					</div>
				</div>
				<div class="flex">
					<img src="Images/to_do.png" alt="to_do_list">
					<div>
							<a href="#"><img src="Images/zoomIn.png" alt="link_to_website"></a>
						<a href="https://github.com/Ricardasxyz/Portfolio/tree/master/to-do%20jQuery"><img src="Images/hover.png" alt="link_to_code" target="_blank"></a>
					</div>
				</div>
				<div class="flex">
					<img src="Images/todo.png" alt="to_do_list">
					<div>
							<a href="#"><img src="Images/zoomIn.png" alt="link_to_website"></a>
						<a href="https://github.com/Ricardasxyz/Portfolio/tree/master/to_do" target="_blank"><img src="Images/hover.png" alt="link_to_code"></a>
					</div>
				</div>
				<div class="flex">
					<img src="Images/portfolio.jpg" alt="portfolio_img">
					<div>
							<a href="#"><img src="Images/zoomIn.png" alt="link_to_website"></a>
						<a href="#"><img src="Images/hover.png" alt="link_to_code"></a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="contact_layer">
			<section class="Container Contact">
				<h2>Contact Me</h2>
				<!-- action="contact.php" -->
				<p>You'll be in for a surprise.</p>
				<form action="contact.php" method="post">
					<input type="text" name="name" placeholder="Enter Your Name:">
					<input type="text" name="mail" placeholder="Enter Your Email:">
					<textarea placeholder="Message" name="message"></textarea>
					<button type="submit" name="submit" id="submit_button">Submit</button>
				</form>
			</section>
	</div>
	<footer class="flex Container">
		<div class="flex copyright_align">&copy;Copyright 2018, Richie's Portfolio</div>
		<div>
			<a href="https://www.linkedin.com/in/ricardas-staniulis/" target="_blank"><img src="Images/ln.png" alt="linkedin_link"></a>
			<a href="#" target="_blank"><img src="Images/fb.png" alt="fb_link"></a>
		</div>
	</footer>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="js/jsFile.js"></script>
</body>
</html>