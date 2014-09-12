<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<!-- The loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row">
		
		<!-- Contact page begins -->
		<section class="grid_8">
			<h1> <a href="<?php echo(get_permalink()); ?>"> <?php the_title(); ?></a></h1>
			<p><?php the_content(); ?></p>
			<hr>
		</section>
		<div class="grid_4">
			<?php 

			$image = get_field('kontakt_img');

			if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>

		</div>

		<!-- Press info page begins -->
		<section class ="grid_12">
			<?php the_field('presseinfo'); ?>
		</section>


		<?php endwhile; ?>
		<!-- Error message -->
		<?php else: ?>
			<p class="grid_12"><?php echo 'Beklager, ingen sider matcher dine kriterier.'; ?></p>
		<?php endif; ?>

	</div>


<?php get_footer();