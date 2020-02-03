<?php
/**
* Template Name: Home with Slider
*
* @package WordPress
* @subpackage codetambay_b4
*/


get_header();

$args = array(
    'post_type' => 'carousel',//CPT UI Post Type Slug					
    'posts_per_page'         => '5',
    'order'                  => 'ASC',
);
$home_carousel = new WP_Query( $args );      

?>

<section class="bd-example">
        <div id="home" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <!--
                <li data-target="#home" data-slide-to="0" class="active"></li>
                <li data-target="#home" data-slide-to="1"></li>
                <li data-target="#home" data-slide-to="2"></li>
            -->
            </ol>
            <div class="carousel-inner">


<?php  
    if ( $home_carousel->have_posts() ) :
        while ( $home_carousel->have_posts() ) : $home_carousel->the_post();           

            /*
            * Include the Post-Type-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            */
            get_template_part( 'template-parts/content', 'carousel' );      



        endwhile;
?>
        </div><!-- .carousel-inner -->
        <a class="carousel-control-prev" href="#home" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<?php

        wp_reset_query();

    else :

        get_template_part( 'template-parts/content', 'jumbotron' ); 

    endif;
?>






	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
