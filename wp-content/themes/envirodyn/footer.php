<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package envirodyn
 */

?>

	<?php wp_footer(); ?>

	</div><!-- #content -->
	<!-- JS Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?php bloginfo('template_directory'); ?>/assets/slick/slick/slick.js"></script>

    <script>
    $(document).ready(function(){
        $('.testimonial-slides').slick({
            centerMode: true,
            centerPadding: '300px',
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            cssEase:'linear',
            responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                {
                breakpoint: 600,
                settings: {
                            slidesToShow: 1,
                            centerPadding: '10px',
                            slidesToScroll: 1
                        }
                    },
                {
                breakpoint: 480,
                settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
    </script>

</body>
</html>
