<?php get_header(); ?>

	<section class="blog">
		<div class="wrapper">
			<div class="background"></div>
			<div class="keymessage">
				<h2 class="keymessage--keyphrase">Blog</h2>
				<h3 class="keymessage--tagline">We share everything that we love</h3>
			</div>
			<div class="blogcontent" data-columns>


			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<article class="blogcontent--article wow fadeInUp">
					<figure class="blogcontent--article--figure">
						<?php the_post_thumbnail( 'thumbnail' ); ?>
					</figure>
					<div class="blogcontent--article--text">
						<h4 class="blogcontent--article--title"><?php the_title(); ?></h4>
						<?php the_excerpt(); ?>
						</div>
					<a href="<?php the_permalink(); ?>" class="btn">Read more</a>
				</article>
			<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>


			</div>
		</section>

<?php get_footer(); ?>