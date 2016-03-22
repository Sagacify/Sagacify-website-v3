<?php get_header(); ?>

<div class="blog single"> <!-- Blog -->
	<div class="blog--content">

		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article class="blog--content--article">
			<a href="<?php the_permalink(); ?>">
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
			</a>
			<div class="blog--content--article--text">
				<div class="blog--content--article--text--meta">
					<p><?php the_author(); ?> in <?php the_category(); ?> | <?php the_time(F j, Y); ?></p>
					<div class="blog--content--article--text--meta--share">
						<a data-network="facebook" data-icon="a" href="#"></a>
						<a data-network="twitter" data-icon="b" href="#"></a>
						<a data-network="googleplus" data-icon="d" href="#"></a>
					</div>
				</div>
				<a href="<?php the_permalink(); ?>" class="blog--content--article--text--title"><h3><?php the_title(); ?></h3></a>
				<p class="blog--content--article--text--paragraph"><?php the_content(); ?></p>
			</div>
		</article>
		<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>