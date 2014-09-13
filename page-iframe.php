<?php
/*
Template Name: Page iframe
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row">
	<section class="grid_12">
		<?php 

			$image = get_field('banner_img');

			if( !empty($image) ): ?>
				<img class="banner_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>	


		<h1> <a href="<?php echo(get_permalink()); ?>"> <?php the_title(); ?></a></h1>

		<p><?php the_content(); ?></p>

		<iframe class="iframe_page grid_12" src="<?php echo(the_field('iframe'));?>">

		</iframe>
		<hr>
	</section>
	</div>	
<?php endwhile; ?>
<?php else: ?>
	<p><?php echo 'Beklager, ingen sider matcher dine kriterier.'; ?></p>
<?php endif; ?>


<?php get_footer();