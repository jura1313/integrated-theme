<?php get_header(); ?>

    <?php

if(have_posts()):
    // if(is_page(17)){

    //     get_template_part('content','product');

    // }elseif(is_page(9)){ 

    //     get_template_part('content','contact');
        

    // }else
    if(is_single()){ 

        get_template_part('content','single');
        
            
    }else{
        get_template_part('content','blog');
    }

else: ?>
    <?php get_template_part('content', 'no-post'); ?>

<?php endif; ?>







<?php get_footer(); ?>

