<section class="contact" style="background:url('<?php the_field('ct_background','option'); ?>');">
			<h2 id="contactSection"><?php the_field('ct_contact_head','option') ?></h2>
		<?php		
			echo do_shortcode(get_field('ct_contact_form','option'))			
		 ?>
	</section>