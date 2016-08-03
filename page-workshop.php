<?php
/*
Template Name: Workshop Page
*/

get_header(); ?>
<?php acf_form_head(); ?>

	<div id="primary" class="fp-content-area">
		<main id="main" class="site-main" role="main">

			<div class="entry-content">
			<?php query_posts('category=workshops'); ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>

					<?php the_field('workshop_title'); ?>
					<?php the_field('workshop_date_start'); ?>
					<?php the_field('workshop_time_start'); ?>
					<?php the_field('workshop_date_end'); ?>
					<?php the_field('workshop_time_end'); ?>
					<?php the_field('workshop_entry'); ?>
					<?php the_field('workshop_cost'); ?>
					<?php the_field('workshop_level'); ?>
					<?php the_field('workshop_location')?>

					<?php 

					$location = get_field('location');

					if( !empty($location) ):
					?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
					<?php endif; ?>

<!-- 					<iframe
					  width="600"
					  height="450"
					  frameborder="0" style="border:0"
					  src="https://www.google.com/maps/embed/v1/view
					  ?key=YOUR_API_KEY
					  &center=<?php the_field('workshop_location')?>
					  &zoom=18
					  &maptype=satellite" allowfullscreen>
					</iframe> -->

					<?php the_field('workshop_contact'); ?>
					<?php the_field('workshop_summary'); ?>
					<?php the_field('workshop_requirements'); ?>
					<?php the_field('workshop_program'); ?>
					<?php the_field('workshop_instructor'); ?>
					<?php the_field('workshop_sponsors'); ?>
				<?php endwhile; ?>
			</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
