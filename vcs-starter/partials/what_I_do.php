<section class="skills container">
		<h2 id="serviceSection"><?php echo the_field('wid_headline','option') ?></h2>
		<div class="list_of_skills flex">
				<?php 
					if( have_rows('wid_info','option') ):
    while( have_rows('wid_info','option') ) : the_row();
        		?>
    					<div class="flex">
				<img src="<?php echo get_sub_field('wid_image')['url'];?>" alt="monitor">
				<h3><?php echo get_sub_field('title') ?></h3>
				<div><?php echo get_sub_field('info') ?></div>
			</div>		
<?php
    endwhile;
					endif;
?>		
		</div>
</section>