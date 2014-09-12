<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<!-- The loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row">

		<!-- About -->
		<section class="grid_8">
			<h1> <a href="<?php echo(get_permalink()); ?>"> <?php the_title(); ?></a></h1>
			<p><?php the_content(); ?></p>
			<hr>
		
			<div class="grid_4">
				<?php 

				$image = get_field('infogram');

				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</div>

			<!-- Partner info page begins -->
		<?php for($i=1; $i<=5; $i++){?>
			<div class="row">
				<div class="grid_4">
					<?php $image = get_field('customfield_'.$i.'_logo'); ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />	
				</div>

				<div class="grid_8">
					<?php the_field('customfield_'.$i); ?>
				</div>
			</div>
		<?php };?><!-- Ends for-loop --> 
		



		</section>


		<?php endwhile; ?>
		<!-- Error message -->
		<?php else: ?>
			<p class="grid_12"><?php echo 'Beklager, ingen sider matcher dine kriterier.'; ?></p>
		<?php endif; ?>

	</div>


<?php get_footer();