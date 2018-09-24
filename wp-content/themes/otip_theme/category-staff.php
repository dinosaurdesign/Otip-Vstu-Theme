<?php
get_header();
?>
    <main class="container">
        <h2 class="text-center bb"><span class="underline">Пр</span>еподавательский состав</h2>
        <section class="row">
            <div class="row align-content-center justify-content-center">
				<?php
				while ( have_posts() ) :
					the_post(); ?>
                    <div class="p-5 col-sm-6 col-md-4 staff_prepodlist">
                        <a href="<?php echo esc_url( get_permalink() ); ?>"
                           rel="bookmark"> <?php the_post_thumbnail( array(200, 'class' => 'img-fluid center-block') ); ?>
                            <h4 class="img-fluid text-center" itemprop="name"><?php the_title(); ?></h4>
                        </a>

                        <div class="text-left "><?php the_excerpt(); ?></div>
                    </div>
				<?php
				endwhile; // End of the loop.
				?>
            </div>
        </section>

        <section class="">
<!--            TODO переписат вывод лаборантов -->

            <h2 class="text-center bb"><span class="underline">Ла</span>борантский состав</h2>
            <div class="row">
                <div class="col-sm-6 col-md-3 staff_prepodlist">
                    <article>
                        <a href="#">
                            <img src="/wp-content/uploads/2017/05/1-1.jpg" alt="" width="100%">
                        </a>
                        <h4>Попко
                            Елена
                            Павловна</h4>
                        <p>Заведующая лабораторией</p>

                    </article>
                </div>
                <div class="col-sm-6 col-md-3 staff_prepodlist">
                    <article>
                        <a href="#">
                            <img src="/wp-content/uploads/2017/05/2-1.jpg" alt="" width="100%">
                        </a>
                        <h4>Сюборова
                            Виолетта
                            Анатольевна</h4>
                        <p>Ведущий лаборант</p>


                    </article>
                </div>
                <div class="col-sm-6 col-md-3 staff_prepodlist">
                    <article>
                        <a href="#">
                            <img src="/wp-content/uploads/2017/05/3-1.jpg" alt="" width="100%">
                        </a>
                        <h4>Базылева
                            Татьяна
                            Ивановна</h4>
                        <p>Лаборант</p>


                    </article>
                </div>
                <div class="col-sm-6 col-md-3 staff_prepodlist staff_prepodlist">
                    <article>
                        <a href="#">
                            <img src="/wp-content/uploads/2017/05/4.jpg" alt="" width="100%">
                        </a>
                        <h4>Коваленко
                            Лариса
                            Александровна</h4>
                        <p>Лаборант</p>


                    </article>
                </div>
            </div>
        </section>



    </main>

<?php
get_footer();
