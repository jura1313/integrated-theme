<?php get_header(); ?>

<main id="main-page">
<?php if(have_posts()) : ?>

<?php get_template_part('content', sanitize_title(get_the_title())); ?>

<?php else: ?>
    
    <?php get_template_part('content', 'no-post'); ?>

<?php endif; ?>
</main>


<?php get_footer(); ?>

