<footer class="flex">
				<div>
				<?php 	
					if( have_rows('fs_social_icons','option') ):
    				while( have_rows('fs_social_icons','option') ) : the_row();
        		?>       			
			<a href="<?php echo get_sub_field('fs_link','option')['url'] ?>">
				<span class="<?php the_sub_field('fs_image','option'); ?>"></span>
			</a>		
		<?php
    endwhile;
	endif;
				?>		
				</div>
</footer>
<?php wp_footer(); ?>
</body>
</html> 
