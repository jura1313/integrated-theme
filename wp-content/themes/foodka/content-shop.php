<?php

// Setup your custom query
$args = array( 'post_type' => 'product');
$loop = new WP_Query( $args );


?>


    <!-- bredcrumb Area Start-->
    <section class="breadcrumb-area">
        <div class="banner-bg-img"></div>
        <div class="banner-shape-1"><img src="assets/img/banner/shape-1.png" alt="img"></div>
        <div class="banner-shape-2"><img src="assets/img/banner/shape-2.png" alt="img"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner text-center">
                        <h3>Choose you items
                        </h3>
                        <h1>Discover Our menu
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Menu List</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bredcrumb Area End --> 

    <!-- populer Area Start-->
    <section class="populer-area pd-top-50 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="section-title text-center">
                        <h3 class="sub-title">Our signature</h3>
                        <h2 class="title">Foodka Main Dishes</h2>
                        <p>Amet amet parturient sed posuere vulputate pharetra a sapien, habitant. Enim vel elit pharetra.</p>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">

                <?php
                    global $paged;
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => 10,
                            'paged' => $paged


                                );
                            $loop = new WP_Query( $args );
                            if ( $loop->have_posts() ) {
                                while ( $loop->have_posts() ) : $loop->the_post();
                                
                                $product = new WC_Product($loop->post->ID); ?>

                                <div class="col-lg-6">
                                    <div class="single-item-wrap style-2">
                                        <div class="media">
                                            <div class="thumb">
                                                <?php the_post_thumbnail('menu_thumb'); ?>
                                            </div>
                                            <div class="wrap-details">
                                                <h5><a href="<?php echo get_permalink( $loop->post->ID ) ?>"><?php the_title(); ?></a></h5>
                                                <p><?php the_content(); ?></p>
                                                <div class="wrap-footer">
                                                    <h6 class="price"><?php echo $product->get_price_html(); ?></h6>
                                                    <button type="submit" class="btn btn-secondary">ADD TO CART</button>
                                                </div>                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php endwhile; wp_reset_query(); // Remember to reset 

                            } else {
                                echo( 'No products found' );
                            }
                ?>


                        <div class="col-lg-6">

                            <?php previous_posts_link( '&laquo; PREV', $loop->max_num_pages) ?>
                        </div>


                        <div class="col-lg-6" style="text-align: right;">

                            <?php next_posts_link( 'NEXT &raquo;', $loop->max_num_pages) ?>
                        </div>

                <?php 
                echo paginate_links();
                wp_reset_postdata(); ?>

            </div>
        </div>
    </section>
    <!-- populer Area End -->   