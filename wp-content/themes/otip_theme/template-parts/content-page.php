<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Otip_Theme
 */

?>
<!---->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="container">


	<div class="entry-content">
		<?php
			the_content();


		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->