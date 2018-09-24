<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Otip_Theme
 */
?>
</div>
<footer class="footer">
    <div class="inlinetext footbrand">
        <a href="http://vstu.by/ru/">
            <img src="<? bloginfo('template_directory'); ?>/img/vstu_logo_new.png" alt="logo">
        </a>
        <p >
            Учреждение образования
            <br>
            "Витебский государственный
            <br>
            технологический университет"
        </p>
    </div>
    <div>
        <p class="footbrand">
            &#169; Кафедра "<? bloginfo('name'); ?>" 2017г.
        </p>
    </div>
    <div class="developed">
        <span>Designed by</span> <a href="https://dds.by/">DDS</a>
    </div>
</footer>
<?php wp_footer(); ?>
<script>

    //if( $(document).height() <= $(window).height() ){
    //    $(".footer").addClass("navbar-fixed-bottom");
    //}
</script>
<!-- Designed & coded by Dinosaur Design Studio. Vitebsk, Belarus-->
<!--http://dds.by/-->
</body>
</html>
