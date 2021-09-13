<?php
/**
 * Single resource partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<a href="<?php the_field('resource_link')?>"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="row">
			<div class='col-md-4 image-holder'>
				<?php echo resource_image();?>
			</div>
			<div class="col-md-8 description">
				<?php the_field('resource_description')?>
				<a class="btn btn-primary" href="<?php the_field('resource_link');?>">Go to Resource</a>
			</div>
		</div>
		<div class="resource-detail-section row">
			<div class="col-md-12">
				<h2>Details</h2>
			</div>
			<div class="col-md-4 course resource-detail">
				<h3>Course</h3>
				<?php echo econ_details('course');?>
			</div>
			<div class="col-md-4 objective resource-detail">
				<h3>Objective</h3>
				<?php echo econ_details('objective');?>
			</div>
			<div class="col-md-4 software resource-detail">
				<h3>Software</h3>
				<?php echo econ_details('software');?>
			</div>
		</div>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
