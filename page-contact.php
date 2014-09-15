<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<!-- The loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row">
		<div class="grid_12">
			<!-- Contact page begins -->
			<div class="row"><div class="grid_12"><h1 class="no-margin-top"> <a href="<?php echo(get_permalink()); ?>"> <?php the_title(); ?></a></h1></div></div>
			<div class="row contact-section">
				<section class="grid_8">
					<p><?php the_content(); ?></p>
				</section>
				<div class="grid_4">
					<?php 

					$image = get_field('kontakt_img');

					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="clear"></div>
			</div>	
			
			<div class="row presseinfo-section">
				<!-- Press info page begins -->
				<section class ="grid_12">
					<?php the_field('presseinfo'); ?>
				</section>
			</div>
		</div>

	</div>
	<?php endwhile; ?>
	<!-- Error message -->
	<?php else: ?>
		<p class="grid_12"><?php echo 'Beklager, ingen sider matcher dine kriterier.'; ?></p>
	<?php endif; ?>

<?php get_footer();