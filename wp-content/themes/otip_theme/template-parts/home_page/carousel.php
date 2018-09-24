<section id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
	    <?php
	    $args  = array(
		    'category_name' => 'Carousel', //!!!!!category_name!!!!!!!
		    'order'         => 'ASC',
	    );
	    $query = new WP_Query( $args );
	    if ( $query->have_posts() ) :
		    $i = 0;
		    while ( $query->have_posts() ) : $query->the_post() ?>
                <div class="carousel-item <?php if ( $i === 0 ): ?>active
                            <?php endif; ?>">
				    <?php
				    if ( has_post_thumbnail() ) {
					    the_post_thumbnail('full', array('class' => 'img-fluid'));
				    }
				    ?>
                </div>
			    <?php $i ++;
		    endwhile;
	    endif;
	    wp_reset_postdata(); ?>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
