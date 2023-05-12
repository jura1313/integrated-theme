    <!-- bredcrumb Area Start-->
    <section class="breadcrumb-area">
        <div class="banner-bg-img"></div>
        <div class="banner-shape-1"><img src="<?php echo get_template_directory_uri(). '/assets/img/banner/shape-1.png' ?>" alt="img"></div>
        <div class="banner-shape-2"><img src="<?php echo get_template_directory_uri(). '/assets/img/banner/shape-2.png' ?>" alt="img"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner text-center">
                        <h3>Blog
                        </h3>
                        <h1>Food Blog</h1>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bredcrumb Area End --> 

    <!-- blog Area Start-->
    <section class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row justify-content-center">



                        <!-- Content -->

                        <?php
                        if(have_posts()):
                        
                        while(have_posts()): the_post();  ?>

                        <div class="col-sm-6">
                            <div class="single-blog-wrap">
                                <div class="thumb">
                                    <a href="<?php the_permalink(); ?>" id="recent"><?php the_post_thumbnail('blog_thumb'); ?></a>
                                </div>
                                <div class="wrap-details">
                                    <span class="cat">
                                        <span class="date">
                                            <i class="ri-calendar-todo-fill"></i>July 14, 2021
                                        </span>
                                        <a class="tag me-0">
                                            <i class="ri-price-tag-3-fill"></i><?php the_category(', ' ); ?>
                                        </a>
                                    </span>
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5> 
                                    <div class="wrap-hover-area">
                                    <p><?php echo get_the_excerpt(); ?></p> 

                                        <a class="link-btn" href="<?php the_permalink(); ?>">Read More</a> 
                                    </div>                       
                                </div> 
                            </div>
                        </div>

                        <?php endwhile; 
                        endif; ?>





                    </div>
                </div>


                <?php get_template_part('content', 'sidepage'); ?>



                <div class="col-12">
                    <nav>
                        <ul class="pagination">
                            
                            <?php 
                                global $wp_query;
                                    $big = 999999999; // need an unlikely integer
                                    $links = paginate_links( array(
                                        'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                        'format'    => '?paged=%#%',
                                        'current'   => max( 1, get_query_var('paged') ),
                                        'total'     => $wp_query->max_num_pages,
                                        'prev_text' => __('<div class="btn-gold pull-left">←</div>','multi'),
                                        'next_text' => __('<div class="btn-gold pull-right">→</div>','multi'),
                                        'type'      => 'array',
                                    ));


                                foreach ($links as $link) : ?>

                                <li class="page-item">
                                        <p  class="page-link">
                                            <?php echo $link; ?>
                                        </p>
                                </li>

                            <?php endforeach; ?>



                        </ul>

                    </nav>
                </div>





            </div>
        </div>
    </section>
    <!-- blog Area End -->
