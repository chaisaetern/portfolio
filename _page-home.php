<?php
/**
 * Template Name: Home Page
 *
 * @package Portfolio
 *
 */
?>

<?php get_header(); ?>

<div class="main-container">
    <?php get_template_part('template-parts/socials') ?>

    <?php get_template_part('template-parts/loading') ?>


    <div class="main-wrapper">

        <div class="bg-container">
            <img class="bg-img" src="<?php the_field("background_image_1"); ?>" alt="">
            <h2>"Turn 7 to a 14, Double Up." -Nipsey Hussle</h2>
        </div>
        
        <div class="hero-container">
        </div>
        
    </div>
</div>

<?php get_footer(); ?>

