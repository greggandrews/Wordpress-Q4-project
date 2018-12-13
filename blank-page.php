<?php
/*
* Template Name: Blank Page
*/
?>
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/about/about-intro' ); ?>
<?php $content = 'Hello there dear reader.'; ?>
<?php include( locate_template( 'template-parts/about/about-content.php' ) ); ?>
<?php get_template_part( 'template-parts/about/about-outro' ); ?>

<?php get_footer(); ?>
