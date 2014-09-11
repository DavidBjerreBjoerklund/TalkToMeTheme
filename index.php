<?php get_header(); ?>

	<div class="row">
		<article class="grid_12 yellow"> slideshow</article>   
	</div>

	<div class="row">
		<div class="grid_8" ><div class="row">
				<div class="grid_8">
				<h1>Main-content omraade</h1>
			</div>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<section class="grid_4">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} ?>


						<h1> <a href="<?php echo(get_permalink()); ?>"> <?php the_title(); ?></a></h1>

						<p><?php the_content(); ?></p>
						<hr>
					</section>
				<?php endwhile; ?>
				<?php else: ?>
				<p><?php echo 'Beklager, ingen posts matcher dine kriterier.'; ?></p>
				<?php endif; ?>
			</section>
				
<!-- 			<div class="row">
				<article class="grid_4 yellow">artikel
				</article>
				<article class="grid_4 yellow">artikel
				</article>
			</div>

			<div class="row">
				<article class="grid_4 yellow">artikel
				</article>

				<article class="grid_4 yellow">artikel2
				</article>
			</div>

			<div class="row">
				<article class="grid_4 yellow"> artikel3</article>
				<article class="grid_4 yellow">artikel</article>
			</div>

			<div class="row">
				<article class="grid_4 yellow">artikel</article>
				<article class="grid_4 yellow">artikel2</article>
			</div> -->

		</div></div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>	