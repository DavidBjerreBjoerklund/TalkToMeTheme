<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="grid_8">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'singlepost-img' );
			} ?>


			<h1> <a href="<?php echo(get_permalink()); ?>"> <?php the_title(); ?></a></h1>
			<p><?php the_content(); ?></p>
			<hr>
		</section>
	<?php endwhile; ?>
<?php else: ?>
	<p><?php echo 'Beklager, ingen posts matcher dine kriterier.'; ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer();