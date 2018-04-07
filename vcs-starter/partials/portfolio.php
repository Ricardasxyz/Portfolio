<div class="to_top">
			<img src="<?php the_field('pt_arrow_up','option') ?>" class="small_Image">
</div>
<section class="projects container flex">
		<h2 id="portfolioSection"><?php the_field('pt_portfolio_heading','option')?></h2>
		<div class="choices flex">
			<div class="choiceWebsites false"><?php the_field('pt_choice_1','option')?></div>
			<div class="choiceOthers success"><?php the_field('ct_choice_2','option')?></div>
		</div>
		<?php if( have_rows('pt_choice_2_examples','option') ):?>
			<div id="others" class="flex" style="display:none">
				<?php while( have_rows('pt_choice_2_examples','option') ) : the_row();?>
					<div class="relative"><img src="<?php echo get_sub_field('ps_image2')["url"];?>" class="Images" alt="<?php echo get_sub_field('ps_image2')["url"];?>">
						<a href="<?php echo get_sub_field('ps_link2')["url"]; ?>"><img src="<?php echo get_field('pt_hover_icon', 'option')["sizes"]["thumbnail"];?>"></a>
					</div>
				<?php endwhile;?>
			</div>
		<?php endif;?>	
		<?php if( have_rows('pt_choice_1_examples','option') ):?>
			<div id="websites" class="flex">
				<?php while( have_rows('pt_choice_1_examples','option') ) : the_row();?>
					<div class="relative"><img src="<?php echo get_sub_field('ps_image')["url"];?>" class="Images" alt="<?php echo get_sub_field('ps_image')["url"];?>">
						<a href="<?php echo get_sub_field('ps_link')["url"]; ?>"><img src="<?php echo get_field('pt_hover_icon', 'option')["sizes"]["thumbnail"];?>"></a>
					</div>
				<?php endwhile;?>
			</div>
		<?php endif;?>
</section>