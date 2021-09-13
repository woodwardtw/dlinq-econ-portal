<?php
/**
 * facet loop
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

while ( have_posts() ): the_post(); ?>
    <div class="facet-resource"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
<?php endwhile;?> 