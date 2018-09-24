<section class="mainabout">
    <div class="container-fluid">
<!--        todo изменить вывод записей -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <img src="/wp-content/uploads/2017/05/hostiry.gif" alt="" width="100%"/>
            </div>
            <div class="col-12 col-md-5 align-self-center">
                <h1 class="mainh"><span class="underline">О К</span>афедре</h1>
                <p class="mainp about align-self-center    ">
                    Кафедра химии Витебского государственного технологического университета основана одновременно с
                    институтом (ВТИЛП) 25 июня 1965 года. Основатель и первый заведующий кафедрой - профессор Савицкий
                    Степан Евдокимович. Он работал в должности заведующего кафедрой с 1965 по 1968гг. и с 1973 по
                    1975гг. В 1965 году первыми преподавателя и сотрудниками кафедры были: ассистент Колдунова И.А.
                    (Шаметько в замуж.), ассистент Ситкевич Т.Н., зав. лабораторией Сафин Ш.И., ст. лаборант Цуранова
                    П.В., препаратор Давыдова Е.А.</p>
                <a href="/%d0%be-%d0%ba%d0%b0%d1%84%d0%b5%d0%b4%d1%80%d0%b5/%d0%b8%d1%81%d1%82%d0%be%d1%80%d0%b8%d1%8f-%d0%ba%d0%b0%d1%84%d0%b5%d0%b4%d1%80%d1%8b/">
                    <div class="aboutbuttonposition">
                        <button class="aboutbutton" type="button">Читать далее</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="mainabout">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 align-self-center">
                <h1 class="mainh">
                    <span class="underline">На</span>учная деятельность
                </h1>
                <p class="mainp about ">
                    На базе кафедры "ЭиХТ" работает научная школа в области экология, природные ресурсы,
                    ресурсосбережение, рациональное природопользование и защита от чрезвычайных ситуаций.
                    Основоположником и руководителем которой является профессор, доктор технических наук Ковчур Сергей
                    Григорьевич.
                    Организационное направление (1992-2000): создание аспирантуры по специальности 11.00.11 «Охрана
                    окружающей среды и рациональное использование природных ресурсов» при УО «Витебский государственный
                    технологический университет». С 2000г. и по настоящее время: аспирантура по специальности 25.00.36
                    «Геоэкология» при УО «Витебский государственный технологический университет». С сентября 2012 г.
                    аспирантура по специальности 25.03.13 «Геоэкология».
                </p>
                <a href="/%d0%bd%d0%b0%d1%83%d0%ba%d0%b0-2/">
                    <div class="aboutbuttonposition">
                        <button class="aboutbutton" type="button">Читать далее</button>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-5">
                <img src="/wp-content/uploads/2017/07/sci.jpg" alt="" width="100%"/>
            </div>

        </div>
    </div>
</section>

<section class="container-fluid d-none d-md-block prepodback">
    <h2>Преподавательский состав</h2>
    <div class="row">
        <div class="staff">
			<?php
			$args  = array(
				'category_name' => 'staff', //!!!!!category_name!!!!!!!
				'order'         => 'ASC',
			);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) :

//todo переписать слайдер с преподавателями

				while ( $query->have_posts() ) :
					$query->the_post(); ?>
                    <div class="staff__item">
                        <a href=" <?php get_permalink(); ?>">
							<?php the_post_thumbnail( array( 'class' => ' rounded-circle center-block ' ) ); ?>
                            <h4 class="text-center mt-2" itemprop="name"> <?php echo get_the_title(); ?></h4>
                        </a>
                        <div class="mt-3">
							<?php get_the_excerpt(); ?>
                        </div>
                    </div>

				<?php endwhile;
			endif;
			wp_reset_postdata(); ?>

        </div>
    </div>

    <div class="text-center">
        <a href="/%d1%81%d0%be%d1%82%d1%80%d1%83%d0%b4%d0%bd%d0%b8%d0%ba%d0%b8/">
            <button class="btn_staff" type="button">Сотрудники</button>
        </a>
    </div>
</section>
<section class="container-fluid googlemap">
    <h1><span class="underline">На</span>ши контакты</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="columntext">
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <a href="#map">Московский пр.-т д.72</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="columntext contwithboarder">
                    <i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
                    <a href="mailto:otip@vstu.by"> otip@vstu.by</a>
                </div>
            </div>
            <div class="divider"></div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="columntext ">
                    <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
                    <a href="tel: 8(0212)479541"> 8(0212)47-95-41</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" id="map">

            </div>
        </div>
    </div>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUiwQs_PI6PLbOaNM20fVEWqD2upQjNVQ&callback=initMap"></script>
    <script>
        function initMap() {
            var uluru = {lat: 55.1781968, lng: 30.2351773};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
</section>
