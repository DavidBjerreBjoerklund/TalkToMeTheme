<?php get_header(); ?>

<div class="row">
	<article class="grid_12">
		<?php dynamic_sidebar('frontpage_banner'); ?>
	</article>   
</div>

<div class="row">
	<div class="grid_12 maincontentarea">
		<div class="row">
			<div class="grid_8" >
				<div class="row">
					<div class="grid_8">
						<h1>Main-content omraade</h1>
					</div>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<section class="grid_4">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>


							<h2> <a href="<?php echo(get_permalink()); ?>"> <?php the_title(); ?></a></h2>

							<p><?php the_content(); ?></p>
							<hr>
						</section>
					<?php endwhile; ?>
					<?php else: ?>
					<p><?php echo 'Beklager, ingen posts matcher dine kriterier.'; ?></p>
						<?php endif; ?>
					
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>	