<?php get_header(); ?>

<section class="blosingle">
	<div class="wrapper">
		<div class="blogsinglecontent">

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); 

				$prev = get_permalink(get_adjacent_post(false,'',false));
				$next = get_permalink(get_adjacent_post(false,'',true)); 

				$prev_post = get_adjacent_post('', '', true);
				$next_post = get_adjacent_post('', '', false);

				// if (has_post_thumbnail( $post->ID ) ):
				$previmage = wp_get_attachment_image_src( get_post_thumbnail_id( $prev_post->ID ), 'prevnext-thumbnails' );
				$nextimage = wp_get_attachment_image_src( get_post_thumbnail_id( $next_post->ID ), 'prevnext-thumbnails' );

				?>
				<article class="blogsinglecontent--article">
					<figure class="blogsinglecontent--article--figure">
						<?php the_post_thumbnail( 'fullsize' ); ?>
					</figure>
					<div class="blogsinglecontent--article--text">
						<h4><?php the_title(); ?></h4>
						<?php the_content(); ?>
					</div>
					<div class="blogsinglecontent--article--social">
						<a href="#" class="blogsinglecontent--article--social--button social--button" data-network="facebook" data-icon="a"></a>
    					<a href="#" class="blogsinglecontent--article--social--button social--button" data-network="twitter" data-icon="c"></a>
    					<a href="#" class="blogsinglecontent--article--social--button social--button" data-network="pinterest" data-icon="p"></a>
    					<a href="#" class="blogsinglecontent--article--social--button social--button" data-network="googleplus" data-icon="u"></a>
					</div>
				</article>

		<div class="blogsinglecontent--nextprev">
			<?php if($next_post->post_title) : ?>
				<a href="<?php echo $prev; ?>" class="blogsinglecontent--nextprev--element" style="background-image:url('<?php echo $nextimage[0]; ?>');">
					<h4 class="blogsinglecontent--nextprev--element--title"><?php echo $next_post->post_title; ?></h4>
					<p class="blogsinglecontent--nextprev--element--previous">Previous blogpost</p>
				</a>
			<?php endif; ?>

			<?php if($prev_post->post_title) : ?>
				<a href="<?php echo $next; ?>" class="blogsinglecontent--nextprev--element right" style="background-image:url('<?php echo $previmage[0]; ?>');">
					<h4 class="blogsinglecontent--nextprev--element--title"><?php echo $prev_post->post_title; ?></h4>
					<p class="blogsinglecontent--nextprev--element--next">Next blogpost</p>
				</a>
			<?php endif; ?>			
		</div>
		<?php comments_template(); ?>

		<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
	</div>
</div>
</section>

<?php get_footer(); ?>