<?php
get_header(); ?>
    <div id="primary" class="container content-area">
        <main id="main" class="site-main row" role="main">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					if ( is_category( 'staff' ) ):
						include 'template-parts/staff/staff-archive.php';

					else:
						get_template_part( 'template-parts/content', get_post_format() );
					endif;

				endwhile;
				if ( is_category( 'staff' ) ) {
					include "template-parts/staff/labs.php";
				}


				if ( $wp_query->max_num_pages > 1 ) : ?>
                    <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var true_posts = '<?php echo serialize( $wp_query->query_vars ); ?>';
                        var current_page = <?php echo ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>;
                        var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                    </script>
                    <button id="true_loadmore" class="center-block pr-5 pl-5 mb-2">Загрузить ещё</button>
				<?php endif;


			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
//get_sidebar();
get_footer();
