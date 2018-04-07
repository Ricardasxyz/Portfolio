<section id="aboutSection" class="about container">
		<h2 class="vertical"><?php the_field('ab_section_name','option') ?></h2>
		<p><?php the_field('ab_content','option') ?></p>
		<?php
			    $link = get_field('download','option');
		 ?>
		<a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
		<?php 
		$link2 = get_field('ab_filler','option');
		?>
	</section>
<section id="filler" style="background-image:url('<?php the_field('ab_filler','option') ?>')"></section>