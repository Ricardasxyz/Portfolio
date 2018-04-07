<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Cormorant:400,500,700|Montserrat:700" rel="stylesheet">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<section class="landing flex">

		<div class="bgImg" style="background-image: url('<?php the_field('main_background'); ?>')"></div>
		<div class="shade" style="background-image: url('<?php the_field('background_shade'); ?>')"></div>
		<h1 class="none"><?php the_field('main_heading') ?></h1>
		<h2 class="slide none"><?php the_field('minor_heading') ?></h2>
		<div class="arrowPos">
			<a href="#here" id="scrollDown">
				<img src="<?php echo get_field('bg_arrow'); ?>" alt="<?php bloginfo("arrow_Down")?>">
			</a>
		</div>
	</section>