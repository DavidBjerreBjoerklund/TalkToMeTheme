<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="row">
			<section class="grid_8">
				<?php 
					$image = get_field('single_page_image');

					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>

				<h1> <a href="<?php echo(get_permalink()); ?>"> <?php the_title(); ?></a></h1>
				<p><?php the_content(); ?></p>
				<hr>
			</section>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php echo 'Beklager, ingen posts matcher dine kriterier.'; ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>
		</div>
<?php get_footer();