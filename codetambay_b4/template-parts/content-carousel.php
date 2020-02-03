<?php
/**
 * Template part for displaying page content of custom post carousel images
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codetambayb4
 */

?>

<div class="carousel-item">
    <img class="d-block w-100" src="<?php the_field('slider_image'); ?>" alt="First slide">
    <div class="carousel-caption px-3 bg-opac-black">                
        <h5 class="d-none d-md-block"><?php the_field('slider_description'); ?></h5>
        <p>
            <a href="<?php the_field('cta_button'); ?>" title="" class="btn btn-cta my-3"><?php the_field('cta_text'); ?> ➤</a>
        </p>
    </div>     
</div>
